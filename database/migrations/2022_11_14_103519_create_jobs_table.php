<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company_logo');
            $table->string('company_name');
            $table->string('company_email')->nullable();
            $table->bigInteger('company_contact')->nullable();
            $table->string('company_url')->nullable();
            $table->string('job_type');
            $table->string('job_title');
            $table->longText('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip_code');
            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->longText('job_details')->nullable();
            $table->integer('vacancy')->nullable();
            $table->string('candidate_qualificaion')->nullable();
            $table->date('last_date_of_apply')->nullable();
            $table->enum('statue', ['active', 'inactive']);
            $table->string('post_by');
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
        Schema::dropIfExists('jobs');
    }
}