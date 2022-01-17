<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->integer('m_id')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('l_name')->nullable();
            $table->char('address_type',1)->nullable();
            $table->string('addressline1')->nullable();
            $table->string('addressline2')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();

             $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('city_code')->nullable();
            $table->string('state_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('phone1')->nullable();

             $table->string('phone2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('fax1')->nullable();
            $table->string('fax2')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->char('status',1)->nullable();
            //$table->string('password')->nullable();
           // $table->rememberToken();
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
         Schema::dropIfExists('address');
    }
}


