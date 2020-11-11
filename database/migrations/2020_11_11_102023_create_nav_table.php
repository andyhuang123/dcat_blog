<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nav_title')->default('')->comment('导航名称');
            $table->tinyInteger('nav_type')->default('1')->comment('导航类型1文章2视频');
            $table->tinyInteger('is_open')->default('1')->comment('1启用 2关闭');
            $table->integer('nav_sort')->default('100')->comment('排序');
            $table->integer('nav_pid')->default('0')->comment('导航上级id');
            $table->string('nav_route')->nullable()->comment('导航前端路由');
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
        Schema::dropIfExists('nav');
    }
}
