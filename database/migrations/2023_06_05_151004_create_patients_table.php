<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('patients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            $table->string('name');
			$table->string('phone', 20);
			$table->string('email');
			$table->string('password');
			$table->integer('age');
			$table->string('governorate');
		});
	}

	public function down()
	{
		Schema::drop('patients');
	}
}
