<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privileges', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('privilege_category_id')->constrained('privilege_categories');

            $table->string('privilege', 25);
            $table->string('description', 30);
            $table->boolean('menu')->default(true);
            $table->tinyInteger('menu_order');
            $table->string('menu_url', 30);
            $table->boolean('active')->default(true);
          
        });

        DB::statement("INSERT INTO 
                            privileges
                            (
                                id, privilege_category_id, privilege, description, menu, menu_order, menu_url, active
                            )
                    VALUES
                    (1, 1, 'SUBJECTS', 'Index Materia', 1, 1, 'subjects', 1),
                    (2, 1, 'SUBJECTS_CREATE', 'Nueva Materia', 0, 0, 'subjects/create', 1),
                    (3, 1, 'SUBJECTS_EDIT', 'Editar Materia', 0, 0, 'subjects/edit', 1),
                    (4, 1, 'SUBJECTS_DELETE', 'Borrar Materia', 0, 0, 'subjects/delete', 1);
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privileges');
    }
}
