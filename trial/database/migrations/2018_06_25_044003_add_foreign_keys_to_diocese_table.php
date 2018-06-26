<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDioceseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diocese', function(Blueprint $table)
		{
			$table->foreign('county_id', 'diocese_ibfk_1')->references('id')->on('counties')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('diocese', function(Blueprint $table)
		{
			$table->dropForeign('diocese_ibfk_1');
		});
	}

}
