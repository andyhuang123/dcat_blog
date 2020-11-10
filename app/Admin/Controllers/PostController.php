<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Post;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Post(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('desc');
            $grid->column('type');
            $grid->column('cover_image');
            $grid->column('video_url');
            $grid->column('content');
            $grid->column('is_show');
            $grid->column('sort');
            $grid->column('tag');
            $grid->column('like');
            $grid->column('reade_num');
            $grid->column('is_top');
            $grid->column('author');
            $grid->column('nav_id');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
            $form->text('title');
            $form->text('desc');
            $form->text('type');
            $form->text('cover_image');
            $form->text('video_url');
            $form->text('content');
            $form->text('is_show');
            $form->text('sort');
            $form->text('tag');
            $form->text('like');
            $form->text('reade_num');
            $form->text('is_top');
            $form->text('author');
            $form->text('nav_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
