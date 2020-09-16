<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderVoucherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_voucher', function(Blueprint $table)
		{
			$table->integer('order_voucher_id', true);
			$table->integer('order_id');
			$table->integer('voucher_id');
			$table->string('description');
			$table->string('code', 10);
			$table->string('from_name', 64);
			$table->string('from_email', 96);
			$table->string('to_name', 64);
			$table->string('to_email', 96);
			$table->integer('voucher_theme_id');
			$table->text('message');
			$table->decimal('amount', 15, 4);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_voucher');
	}

}
