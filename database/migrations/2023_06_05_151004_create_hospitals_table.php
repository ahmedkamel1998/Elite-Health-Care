<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('address');
			$table->string('governorate');
			$table->string('phone');
			$table->string('specialties');
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('hospitals');
	}
}