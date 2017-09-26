<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // php artisan migrateしたときに呼ばれる
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps(); // created_atとupdated_atを作成
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // php artisan migrate:rollback
    {
        Schema::drop('articles');
    }
}














