<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender')->default('male');
            $table->date('date_of_birth')->nullable();
            $table->text('current_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
			$table->string('nid')->nullable();
			$table->string('phone')->nullable();
			$table->string('marital_status')->nullable();
			$table->string('father_name')->nullable();
			$table->string('mother_name')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('dp')->nullable();
			$table->string('salary')->nullable();
			$table->string('leave')->nullable();
            $table->rememberToken();
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
        Schema::drop('employees');
    }
}
