<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->integer('category_id', true);
			$table->string('image')->nullable();
			$table->integer('parent_id')->default(0)->index('parent_id');
			$table->boolean('top');
			$table->integer('column');
			$table->integer('sort_order')->default(0);
			$table->boolean('status');
			$table->dateTime('date_added');
			$table->dateTime('date_modified');
			$table->primary(['category_id','parent_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
