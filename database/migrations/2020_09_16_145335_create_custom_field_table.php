<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomFieldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_field', function(Blueprint $table)
		{
			$table->integer('custom_field_id', true);
			$table->string('type', 32);
			$table->text('value');
			$table->string('validation');
			$table->string('location', 7);
			$table->boolean('status');
			$table->integer('sort_order');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custom_field');
	}

}
