<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustryServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_service_industry', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_industry_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('service_industry_id')
                ->references('id')
                ->on('service_industries')
                ->onDelete('cascade');

            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_service_industry');
    }
}
