<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
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
            $table->string('email');
            $table->string('username')->default('yohoho');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('school_name')->nullable();
            $table->string('grade')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->integer('webinar_id')->default(0);
            $table->integer('transaction_id')->default(0);
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
