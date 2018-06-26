<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_types', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description', 70);
			$table->timestamp('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('added_by')->nullable();
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
		Schema::drop('event_types');
	}

}
