<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('id', 25);
            $table->unsignedInteger('owner_id');
            $table->string('name', 100);
            $table->unsignedInteger('max_size')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->primary('id');
            $table->foreign('owner_id')->references('id')->on('users')
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
        Schema::dropIfExists('companies');
    }
}
