<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTechStacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_tech_stacks', function (Blueprint $table) {
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->foreignId('tech_stack_id')->constrained()->onDelete('cascade');
            $table->primary(['program_id','tech_stack_id']);
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
        Schema::dropIfExists('program_tech_stacks');
    }
}
