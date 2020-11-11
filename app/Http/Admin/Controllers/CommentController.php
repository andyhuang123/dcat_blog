<?php

namespace App\http\Admin\Controllers;

use App\http\Admin\Repositories\Comment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CommentController extends AdminController
{
    protected $title="文章评论";
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('post_id');
            $grid->column('content');
            $grid->column('is_show');
            $grid->column('reply_id');
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
        return Show::make($id, new Comment(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('post_id');
            $show->field('content');
            $show->field('is_show');
            $show->field('reply_id');
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
        return Form::make(new Comment(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('post_id');
            $form->text('content');
            $form->text('is_show');
            $form->text('reply_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
