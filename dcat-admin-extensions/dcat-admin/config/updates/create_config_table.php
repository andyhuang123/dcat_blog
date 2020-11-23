<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateConfigTable extends Migration
{
     // 这里可以指定你的数据库连接
     public function getConnection()
     {
         return config('database.connection') ?: config('database.default');
     } 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('config')) {
            Schema::create('config', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->default('');
                $table->text('value');
                $table->text('desc')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config');
    }
}
