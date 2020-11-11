<?php

namespace App\Http\Admin\Controllers;

use App\Http\Admin\Repositories\Post;
use App\Http\Admin\Repositories\Category;
use Dcat\Admin\Form; 
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PostController extends AdminController
{
    protected $title="文章";
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Post(['nav_name']), function (Grid $grid) { 
            $grid->column('id')->sortable(); 
            $grid->column('nav_name.title','所属分类');
            $grid->column('title');
            $grid->column('author'); 
            $grid->column('type')->display(function($type){
                $name = Category::$navigation[$type];
                return "<span Class='label' style='background:blue'>$name</span>";
            });
            $grid->column('tag')->label('danger');
            $grid->column('cover_image')->image('', 100, 100); 
            $grid->column('is_show')->switch();
            $grid->column('is_top','是否顶置')->switch();  
            $grid->column('like');
            $grid->column('reade_num');
            $grid->column('sort')->editable(true);
          
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
        return Show::make($id, new Post(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('desc');
            $show->field('type');
            $show->field('cover_image');
            $show->field('video_url');
            $show->field('content');
            $show->field('is_show');
            $show->field('sort');
            $show->field('tag');
            $show->field('like');
            $show->field('reade_num');
            $show->field('is_top');
            $show->field('author');
            $show->field('nav_id');
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
        return Form::make(new Post(), function (Form $form) {

            $form->display('id');

            $form->column(6, function (Form $form) {

                $tree_nav   = (new Category())->getTree(); 

                $form->select('nav_id', '所属导航')->options($tree_nav)->default(0);

                $form->text('title')->rules('required');
                $form->textarea('desc');
                $form->text('author'); 
                $form->tags('tag', '标签')->saveAsJson(); 
                $form->image('cover_image');


            });
            $form->column(6, function (Form $form) {

                $form->select('type')->options( Category::$navigation)->when('=', 1, function (Form $form) {

                    $form->editor('content');
                  
                 })->when('=', 2, function (Form $form) {
    
                    $form->file('video_url'); 
                    
                })->default(1);
                 
                $form->switch('is_show')->default(1);
              
                $form->switch('is_top')->default(0); 
               
                $form->number('sort'); 


            }); 
          
        });

    }
}
