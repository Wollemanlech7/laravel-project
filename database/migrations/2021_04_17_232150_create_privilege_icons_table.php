<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegeIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilege_icons', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('privilege_category_id')->constrained();

            $table->text('coordinate');
        });

        DB::statement("INSERT INTO 
                            privilege_icons(
                                id, privilege_category_id, coordinate
                            ) 
                        VALUES
                            (1, 1, 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10')
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilege_icons');
    }
}
