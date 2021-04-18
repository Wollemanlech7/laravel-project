<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilege_categories', function (Blueprint $table) {
            $table->id();

            $table->string('privilege_category', 30);
            $table->string('url', 30);
            $table->tinyInteger('position');
        });

        DB::statement("INSERT INTO 
                            privilege_categories(
                                id, privilege_category, url, position
                            ) 
                            VALUES(1, 'Subjects', 'subject.index', 1);
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilege_categories');
    }
}
