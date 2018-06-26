<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDioceseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diocese', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 70);
			$table->integer('county_id')->index('county_id');
			$table->integer('bishop_id')->index('bishop_id');
			$table->string('address', 80);
			$table->integer('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diocese');
	}

}
