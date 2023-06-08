<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100);
			$table->string('phone', 20);
			$table->string('email');
			$table->string('address');
			$table->string('gender');
			$table->string('specialty');
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}
}