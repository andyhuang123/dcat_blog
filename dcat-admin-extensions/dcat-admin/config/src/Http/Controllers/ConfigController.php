<?php

namespace Dcat\Admin\Config\Http\Controllers;

use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Http\JsonResponse;
use Dcat\Admin\Layout\Content; 
use Dcat\Admin\Admin; 
use Dcat\Admin\Config\Models\Config;
use Dcat\Admin\Config\ConfigServiceProvider;
use Dcat\Admin\Http\Controllers\AdminController;

class ConfigController extends AdminController
{
    public function index(Content $content)
    {
        return $content 
            ->title(ConfigServiceProvider::trans('config.title'))
            ->description(trans('admin.list'))
            ->body($this->grid());
    }
    
    protected function grid()
    {
        return new Grid(new Config, function (Grid $grid) {
            $grid->column('id', 'ID')->sortable();
            
            $grid->id('ID')->sortable();
            $grid->name('标识');
            $grid->value('值');
            $grid->desc('描述');
    
            $grid->created_at();
            $grid->updated_at();
    
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->like('name');
                $filter->like('value');
            });
           
        });
    }

    public function form()
    {
        $form = new Form(new Config());

        $form->display('id', 'ID');
        $form->text('name','标识')->rules('required');
        if (config('admin.extensions.config.valueEmptyStringAllowed', false)) {
            $form->textarea('value','值');
        } else {
            $form->textarea('value','值')->rules('required');
        }
        $form->textarea('desc','描述');
 
        return $form;
    }

    public function destroy($id)
    {
        $ids = explode(',', $id);

        Config::destroy(array_filter($ids));

        return JsonResponse::make()
            ->success(trans('admin.delete_succeeded'))
            ->refresh()
            ->send();
    }
}