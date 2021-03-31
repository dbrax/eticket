_<?php


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

    class CreateEventDateTimesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('event_datetimes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('eventid')->nullable();
                $table->foreign('eventid')->references('id')->on('events');

                $table->foreignId('eventid')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->date('event_date');
                $table->time('event_time', $precision = 0);
                $table->date('event_end_date')->nullable();
                $table->time('event_end_time', $precision = 0)->nullable();
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
            Schema::dropIfExists('event_datetimes');
        }
    }
