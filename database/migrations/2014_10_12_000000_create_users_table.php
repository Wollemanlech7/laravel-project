<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('last_name', 30);
            $table->string('img_path', 100);
            $table->date('birthday');
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone', 20);
            $table->string('address', 200);
            $table->boolean('active')->default(true);   
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement("INSERT INTO 
                            users
                    (
                        id, name, last_name, img_path, birthday, email, email_verified_at, password, phone, address, active, remember_token, created_at, updated_at
                    )
                    VALUES
                        (1, 'arturo', 'ordaz', 'img/profile/avatar.png', '2002-09-03', 'admin@somma.mx', null,'". bcrypt('1234') ."', '', '', 1, '', NOW(), NOW()),
                        (2, 'Juan', 'admin2', 'img/profile/avatar.png', '2002-09-03', 'jc@somma.mx', null,'". bcrypt('1234') ."', '', '', 1, '', NOW(), NOW())       
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
