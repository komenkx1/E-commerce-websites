<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo_path')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('sex',['male','female','custom'])->default('custom');
            $table->string('phone_number', 15)->nullable();
            $table->string('timezone')->nullable();
            $table->foreignId('province_id')->nullable()->constrained('ro_province')->onDelete('cascade');
            $table->foreignId('city_id')->nullable()->constrained('ro_city')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
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
