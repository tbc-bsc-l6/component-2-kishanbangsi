<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');                // Company Title
            $table->string('company');              // Company Name
            $table->string('location');             // Company Location
            $table->string('companyLogo');          // Company Logo
            $table->string('email');                // Company Email
            $table->string('salary');               // Job Salary
            $table->string('experience');           // Job Experience (1+ yrs)
            $table->string('qualification');        // Job Qualification (Bachelors complete)
            $table->string('jobType');              // Job Type (Full time, Part time, Remote, On-site)
            $table->string('position');             // Job Position (Sr, Md, Jr)     
            $table->string('tags');                 // Job Tags (laravel, js, python, web development)
            $table->longText('description');        // Job Description
            $table->date('Deadline');               // Job Posting Deadline
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
};
