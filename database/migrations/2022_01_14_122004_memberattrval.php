<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Memberattrval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('member_attrval', function (Blueprint $table) {
            $table->id();
            $table->integer('m_id')->nullable();
            $table->string('key')->nullable();
            $table->string('value')->nullable();
            $table->char('status',1)->nullable();
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
         Schema::dropIfExists('member_attrval');
    }
}
