<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoogleshoppingTargetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('googleshopping_target', function(Blueprint $table)
		{
			$table->integer('advertise_google_target_id')->unsigned()->primary();
			$table->integer('store_id')->default(0)->index('store_id');
			$table->string('campaign_name');
			$table->string('country', 2);
			$table->decimal('budget', 15, 4)->default(0.0000);
			$table->text('feeds');
			$table->string('status')->default('paused');
			$table->date('date_added')->nullable();
			$table->integer('roas')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('googleshopping_target');
	}

}
