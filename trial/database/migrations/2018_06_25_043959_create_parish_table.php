<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parish', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 70);
			$table->integer('diocese_id')->index('diocese_id');
			$table->integer('subcounty_id')->index('subcounty_id');
			$table->integer('priest_id')->index('priest_id');
			$table->string('address', 80);
			$table->string('coordinates', 120)->nullable();
			$table->integer('picture')->nullable();
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
		Schema::drop('parish');
	}

}
