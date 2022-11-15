<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobs_id');
            $table->string('candidate_name');
            $table->string('candidate_email');
            $table->string('candidate_contact');
            $table->string('current_location');
            $table->string('working_as');
            $table->string('last_company')->nullable();
            $table->string('total_work_experience')->nullable();
            $table->string('last_ctc')->nullable();
            $table->string('skills')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('resume');
            $table->enum('status', ['accept', 'reject']);
            $table->timestamps();
            $table->foreign('jobs_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}