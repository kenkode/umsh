<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('bank_name');
			$table->integer('bank_code')->default('0');
<<<<<<< HEAD
			$table->integer('organization_id')->unsigned();
			$table->foreign('organization_id')->references('id')->on('organizations')->onDelete('restrict')->onUpdate('cascade');
=======
			$table->integer('organization_id')->unsigned()->default('0')->index('banks_organization_id_foreign');
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
			$table->timestamps();
		});

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('banks');
	}


}
