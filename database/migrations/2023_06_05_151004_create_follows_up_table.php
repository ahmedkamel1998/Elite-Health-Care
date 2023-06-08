<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFollowsUpTable extends Migration {

	public function up()
	{
		Schema::create('follows_up', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
			$table->string('file');
			$table->string('answer')->nullable();
			$table->string('message');
		});
	}

	public function down()
	{
		Schema::drop('follows_up');
	}
}