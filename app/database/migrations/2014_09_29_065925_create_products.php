<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('products', function(Blueprint $table){
			$table->increments('id');
			$table->integer('categ_id');
			$table->string('nume');
			$table->float('price');
			$table->string('ext');
			$table->enum('outlet', array(0,1))->default(0);
			$table->float('cant_outlet');
			$table->text('description');
			$table->enum('public', array(0,1))->default(1);
			$table->enum('featured', array(0,1))->default(0);
			$table->date('marked_delete');
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
		//
	}

}
