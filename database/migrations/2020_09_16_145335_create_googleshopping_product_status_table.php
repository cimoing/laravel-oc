<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoogleshoppingProductStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('googleshopping_product_status', function(Blueprint $table)
		{
			$table->integer('product_id')->default(0);
			$table->integer('store_id')->default(0);
			$table->string('product_variation_id', 64);
			$table->text('destination_statuses');
			$table->text('data_quality_issues');
			$table->text('item_level_issues');
			$table->integer('google_expiration_date')->default(0);
			$table->primary(['product_id','store_id','product_variation_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('googleshopping_product_status');
	}

}
