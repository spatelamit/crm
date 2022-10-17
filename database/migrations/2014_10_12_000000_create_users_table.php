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
            $table->integer('company_id')->default(0);
            $table->integer('parent_id')->default(0);
            $table->integer('sub_parent_id')->default(0);
            $table->string('username',100)->nullable()->default(null);
            $table->string('password',100)->nullable()->default(null);
            $table->string('full_name',100)->nullable()->default(null);
            $table->string('email',100)->nullable()->default(null);
            $table->string('contact',100)->nullable()->default(null);
            $table->date('dob')->nullable()->default(null);
            $table->integer('role')->default(0);
            $table->dateTime('last_login',$precision = 0)->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('creation_date',$precision = 0)->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status',['0','1'])->default('1');

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
