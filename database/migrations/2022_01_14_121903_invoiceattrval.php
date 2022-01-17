<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoiceattrval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('invoice_attrvals', function (Blueprint $table) {
            $table->id();
            $table->integer('i_id')->nullable();
            $table->string('key')->nullable();
            $table->string('value')->nullable();
            $table->char('status',1)->nullable();
            $table->integer('updated_by')->nullable();
            $table->string('remark')->nullable();
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
         Schema::dropIfExists('invoice_attrvals');
    }
}
