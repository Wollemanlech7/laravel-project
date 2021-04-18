<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_privileges', function (Blueprint $table) {
            $table->id();
          
            $table->foreignId('user_id')->constrained();
            $table->foreignId('privilege_id')->constrained();
        });

        DB::statement("INSERT INTO 
                            user_privileges(
                                id, user_id, privilege_id
                            ) 
                            VALUES
                            (1, 2, 1),
                            (2, 2, 2),
                            (3, 2, 3),
                            (4, 2, 4),
                            (5, 1, 1)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_privileges');
    }
}
