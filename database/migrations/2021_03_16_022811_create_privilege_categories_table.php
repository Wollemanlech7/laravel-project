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

            $table->tinyInteger('menu_order');
        
            $table->text('icon', 350);
        });

        DB::statement("INSERT INTO 
                            privilege_categories
                            (
                                id, privilege_category, menu_order, icon
                            )
                    VALUES
                    ('1', 'Subjects', '1', '-')
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
