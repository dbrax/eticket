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

class CreateOrganizerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userid')->nullable(); //??? in multitenant or distribution
            $table->string("name");
            $table->string("timezone")->nullable();
            $table->string("logo")->nullable();
            $table->string("url")->nullable();

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
        Schema::dropIfExists('organizer');
    }
}
