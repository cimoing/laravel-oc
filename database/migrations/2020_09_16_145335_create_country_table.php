<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('country', function(Blueprint $table)
		{
			$table->integer('country_id', true);
			$table->string('name', 128);
			$table->string('iso_code_2', 2);
			$table->string('iso_code_3', 3);
			$table->text('address_format');
			$table->boolean('postcode_required');
			$table->boolean('status')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('country');
	}

}
