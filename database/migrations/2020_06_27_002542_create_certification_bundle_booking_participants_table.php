<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationBundleBookingParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_bundle_booking_participants', function (Blueprint $table) {

            $table->id();
            $table->unsignedInteger('certification_bundle_booking_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->softDeletes();
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
        Schema::dropIfExists('certification_bundle_booking_participants');
    }
}
