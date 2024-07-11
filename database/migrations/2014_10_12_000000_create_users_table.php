<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
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
           // $table->foreignId('role_id')->constrained('roles');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->rememberToken();
            $table->string('lang')->default('en');
            $table->timestamps();
        });

        DB::table('users')->insert([
            'id' => 1,
           //'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'created_at' => null,
            'updated_at' => null,
            'email_verified_at' => null,
            'password' => '$2a$11$7offm7GKrWRgDHU8dn6zVeZD3nOXdMD2UabZV2KMoTCT.pLp1XCFy',
            'remember_token' => null
        ]);
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
};