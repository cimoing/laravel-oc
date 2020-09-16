<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modification', function(Blueprint $table)
		{
			$table->integer('modification_id', true);
			$table->integer('extension_download_id');
			$table->integer('extension_install_id');
			$table->string('name', 64);
			$table->string('code', 64);
			$table->string('author', 64);
			$table->string('version', 32);
			$table->string('link');
			$table->text('xml');
			$table->boolean('status');
			$table->dateTime('date_added');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modification');
	}

}
