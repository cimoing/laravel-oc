<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoogleshoppingProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('googleshopping_product', function(Blueprint $table)
		{
			$table->increments('product_advertise_google_id');
			$table->integer('product_id')->nullable();
			$table->integer('store_id')->default(0);
			$table->boolean('has_issues')->nullable();
			$table->string('destination_status')->default('pending');
			$table->integer('impressions')->default(0);
			$table->integer('clicks')->default(0);
			$table->integer('conversions')->default(0);
			$table->decimal('cost', 15, 4)->default(0.0000);
			$table->decimal('conversion_value', 15, 4)->default(0.0000);
			$table->string('google_product_category', 10)->nullable();
			$table->string('condition')->nullable();
			$table->boolean('adult')->nullable();
			$table->integer('multipack')->nullable();
			$table->boolean('is_bundle')->nullable();
			$table->string('age_group')->nullable();
			$table->integer('color')->nullable();
			$table->string('gender')->nullable();
			$table->string('size_type')->nullable();
			$table->string('size_system')->nullable();
			$table->integer('size')->nullable();
			$table->boolean('is_modified')->default(0);
			$table->index(['product_id','store_id'], 'product_id_store_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('googleshopping_product');
	}

}
