<?php

namespace App\http\Admin\Controllers;

use App\http\Admin\Repositories\Category; 
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Tree;
use Dcat\Admin\Http\Controllers\AdminController;

class CategoryController extends AdminController
{

     protected $navigation = [
        0 => '顶级分类',
        1 => '文章',
        2 => '视频' 
    ];
    public function index(Content $content)
    {
        return $content->header('文章分类')
            ->body( $this->grid());
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->model()->orderBy('order','desc');
            $grid->column('id')->sortable(); 
            $grid->column('title')->tree();
            $grid->column('parent_id');
            $grid->column('router','路由');
            $grid->column('order')->editable(true);
            $grid->column('is_open')->switch();
            $grid->column('created_at');
         
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Category(), function (Show $show) {
            $show->field('id');
            $show->field('parent_id');
            $show->field('order');
            $show->field('title');
            $show->field('is_open');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Category(), function (Form $form) {

            $form->display('id');
           
            $tree_nav   = (new Category())->getTree();

            $select_nav = [0=>'顶级导航'];
            
            foreach ($tree_nav as $k => $v) {
                $select_nav[$k] =   $v ;
            } 
            $form->select('parent_id', '顶级导航')->options($select_nav)->default(0);
           
            $form->text('title');
            $form->text('router','路由');
            $form->select('nav_type', '类型')->options($this->navigation)->default(0);

            $form->switch('is_open', '是否启用')->default(1);

            $form->number('order')->default(100);
         
        });
    }
}
