<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('identifier')->nullable();
            $table->string('code')->nullable();
            $table->char('type',1)->nullable();
            $table->integer('r_id')->nullable();
            $table->char('status',1)->nullable();
           // $table->string('created_at')->nullable();
            $table->string('login_id')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('members');
    }
}
