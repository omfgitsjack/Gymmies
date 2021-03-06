<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->text('description');
			$table->integer('capacity');
			$table->string('sport');
			$table->string('location');
			$table->dateTime('date_from');
			$table->dateTime('date_to');
			$table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            /*
             * SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a
             * child row: a foreign key constraint fails (`justplay`.`activities`, CONSTRAINT
             * `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
             * ON DELETE CASCADE ON UPDATE CASCADE) (SQL: insert into `activities` (`location`,
             * `date_from`, `date_to`, `capacity`, `description`, `sport`, `updated_at`, `created_at`)
             *  values (TPAC, 01/01/01, 01/01/01, 10, yea baby come, tennis, 2014-09-04 06:29:16,
             * 2014-09-04 06:29:16))
             */
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Activities');
	}

}
