<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations',function (Blueprint $table) {
            $table->id();

            $table->text('firstname');           
            $table->text('lastname');                    
            // $table->text('user_id');
            $table->text('homephone')->default('0');
            $table->text('extension')->default('0');
            $table->text('workphone')->default('0');
            $table->text('fax')->default('0');
            $table->text('cellphone')->default('0');
            $table->text('email')->default('0');
            $table->text('homeaddress')->default('0');
            $table->text('country')->default('0');
            $table->text('city')->default('0');
            $table->text('state')->default('0');
            $table->text('zip')->default('0');
            $table->text('gender')->default('0');
            $table->text('martialstatus')->default('0');
            // $table->text('dob')->default('0');
            $table->text('agree')->default('0');

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
        Schema::dropIfExists('registrations');
    }
};
