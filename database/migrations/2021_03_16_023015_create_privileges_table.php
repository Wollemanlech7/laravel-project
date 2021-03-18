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
            
            $table->foreignId('privilege_category_id')->constrained('privileges_categories');

            $table->string('privilege', 25);
            $table->string('description', 30);
            $table->boolean('menu')->default(true);
            $table->tinyInteger('menu_order');
            $table->string('menu_url', 30);
            $table->boolean('active')->default(true);
          
        });
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
