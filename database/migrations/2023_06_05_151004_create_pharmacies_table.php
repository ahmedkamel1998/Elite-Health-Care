<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmaciesTable extends Migration {

	public function up()
	{
		Schema::create('pharmacies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('governorate');
			$table->string('address');
			$table->string('phone');
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('pharmacies');
	}
}