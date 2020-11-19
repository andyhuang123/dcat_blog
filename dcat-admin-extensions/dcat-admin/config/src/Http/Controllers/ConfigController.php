<?php

namespace Dcat\Admin\Config\Http\Controllers;

use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Http\JsonResponse;
use Dcat\Admin\Layout\Content; 
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;
use Dcat\Admin\Config\Models\Config;
use Dcat\Admin\Config\ConfigServiceProvider;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Arr;
class ConfigController extends Controller
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
            $grid->name()->display(function ($name) {
                return "<a tabindex=\"0\" class=\"btn btn-xs btn-twitter\" role=\"button\" data-toggle=\"popover\" data-html=true title=\"Usage\" data-content=\"<code>config('$name');</code>\">$name</a>";
            });
            $grid->value();
            $grid->desc();
    
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
        $form->text('name')->rules('required');
        if (config('admin.extensions.config.valueEmptyStringAllowed', false)) {
            $form->textarea('value');
        } else {
            $form->textarea('value')->rules('required');
        }
        $form->textarea('description');

        $form->display('created_at');
        $form->display('updated_at');

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