<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartOfAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('id', 50);
            $table->string('company_id', 25);
            $table->string('description', 100);
            $table->enum('type_code', array_keys(config('accurate.accountTypes')));

            $table->primary('id');
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
        Schema::dropIfExists('chart_of_accounts');
    }
}
