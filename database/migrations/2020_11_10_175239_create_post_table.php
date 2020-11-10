<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('标题');
            $table->string('desc')->default('')->comment('描述');
            $table->tinyInteger('type')->default('1')->comment('1文章article  2 视频 video');
            $table->string('cover_image')->default('')->comment('封面图片');
            $table->string('video_url')->nullable()->comment('视频路径');
            $table->text('content')->nullable()->comment('内容');
            $table->integer('is_show')->default('1')->comment('是否显示 默认1显示 0 不显示');
            $table->integer('sort')->default('100')->comment('排序');
            $table->string('tag')->nullable()->comment('标签');
            $table->integer('like')->default('0')->comment('点赞');
            $table->integer('reade_num')->default('0')->comment('浏览数');
            $table->tinyInteger('is_top')->default('0')->comment('0不置顶 1置顶');
            $table->string('author')->nullable()->comment('作者');
            $table->integer('nav_id')->comment('所属导航id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
