<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('slug')->nullable();
			$table->string('title');
			$table->text('description');
			$table->text('content');
			$table->integer('type_id')->unsigned()->index();
			$table->boolean('published');
			$table->integer('author_id')->unsigned()->index();
			$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
