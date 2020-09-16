<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_description', function(Blueprint $table)
		{
			$table->integer('product_id');
			$table->integer('language_id');
			$table->string('name')->index('name');
			$table->text('description');
			$table->text('tag');
			$table->string('meta_title');
			$table->string('meta_description');
			$table->string('meta_keyword');
			$table->primary(['product_id','language_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_description');
	}

}
