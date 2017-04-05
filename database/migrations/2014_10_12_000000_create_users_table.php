<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('company_id', 25)->nullable()->default(null);
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')
                ->onUpdate('cascade');
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
