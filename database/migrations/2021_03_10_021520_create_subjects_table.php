<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 25);
            $table->string('background', 100);
            $table->string('icon', 100);
            $table->boolean('active')->default(true);   

        });

        DB::statement("insert into subjects
                    (
                        id, subject, background, icon, active
                    )
                    values
                        (1, 'Math', 'bg-red-600 text-white hover:bg-red-700', null, 1),
                        (2, 'Reading and Writing', 'bg-green-600 text-white hover:bg-green-700', null, 1),
                        (3, 'Essay', 'bg-blue-600 text-white hover:bg-blue-700', null, 1)

        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
