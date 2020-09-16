<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location', function(Blueprint $table)
		{
			$table->integer('location_id', true);
			$table->string('name', 32)->index('name');
			$table->text('address');
			$table->string('telephone', 32);
			$table->string('fax', 32);
			$table->string('geocode', 32);
			$table->string('image')->nullable();
			$table->text('open');
			$table->text('comment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('location');
	}

}
