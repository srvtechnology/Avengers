<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('m_id')->nullable();
            $table->string('identifier')->nullable();
            $table->char('status',1)->nullable();
            $table->char('type',1)->nullable();
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
          Schema::dropIfExists('invoices');
    }
}
