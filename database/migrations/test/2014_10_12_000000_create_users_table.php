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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('school_name')->nullable();
            $table->string('university')->nullable();
            $table->string('grade')->nullable();
            $table->string('major')->nullable();
            $table->string('experience')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->integer('verified')->default(0);
            $table->integer('webinar_id')->default(0);
            $table->string('mun_id')->nullable();
            $table->string('country')->nullable();
            $table->string('munevent')->nullable();
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
