<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->index('article_id');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->integer('tag_id')->unsigned();
            $table->index('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_tags', function (Blueprint $table) {
            $table->dropForeign('article_tags_article_id_foreign');
            $table->dropIndex('article_tags_article_id_index');
            $table->dropForeign('article_tags_tag_id_foreign');
            $table->dropIndex('article_tags_tag_id_index');
        });
    }
}
