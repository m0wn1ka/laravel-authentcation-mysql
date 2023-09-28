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
            $table->text('homephone') ;
            $table->text('extension') ;
            $table->text('workphone') ;
            $table->text('fax') ;
            $table->text('cellphone') ;
            $table->text('email') ;
            $table->text('homeaddress') ;
            $table->text('country') ;
            $table->text('city') ;
            $table->text('state') ;
            $table->text('zip') ;
            $table->text('gender') ;
            $table->text('martialstatus') ;
            // $table->text('dob') ;
            $table->text('agree')->default('0') ;

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
