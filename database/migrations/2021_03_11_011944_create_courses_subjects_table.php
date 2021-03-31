<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_subjects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('course_id')->constrained();
            $table->foreignId('subject_id')->constrained();

            $table->boolean('active')->default(true);
        });

        DB::statement("insert into courses_subjects
                    (
                        id, course_id, subject_id, active
                    )
                    values
                        (1, 1, 1, 1),
                        (2, 1, 2, 1),
                        (3, 1, 3, 1),


        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_subjects');
    }
}
