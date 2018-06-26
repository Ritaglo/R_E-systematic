<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parish', function(Blueprint $table)
		{
			$table->foreign('diocese_id', 'parish_ibfk_1')->references('id')->on('diocese')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subcounty_id', 'parish_ibfk_2')->references('id')->on('subcounty')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parish', function(Blueprint $table)
		{
			$table->dropForeign('parish_ibfk_1');
			$table->dropForeign('parish_ibfk_2');
		});
	}

}
