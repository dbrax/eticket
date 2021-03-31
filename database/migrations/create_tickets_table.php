<?php


/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/eticket
 * Email: epmnzava@gmail.com
 * 
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('eventid')->nullable();
            $table->foreign('eventid')->references('id')->on('events');

            $table->foreignId('eventid')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->integer('amount');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->text('status')->nullable();
            $table->integer('minimum_order')->default(1);
            $table->integer('maximum_order')->default(1);
            $table->integer('hide_on_sold_out')->default(1);
            $table->integer('show_quantity_remaining')->default(1);
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
        Schema::dropIfExists('tickets');
    }
}
