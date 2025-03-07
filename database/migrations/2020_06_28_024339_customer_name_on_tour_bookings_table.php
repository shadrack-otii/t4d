<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerNameOnTourBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour_bookings', function (Blueprint $table) {
            
            $table->renameColumn('name', 'first_name');
            $table->string('last_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_bookings', function (Blueprint $table) {
            
            $table->renameColumn('first_name', 'name');
            $table->dropColumn('last_name');
        });
    }
}
