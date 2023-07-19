<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_data', function (Blueprint $table) {
            $table->id();
            $table->date('report_date')->nullable();
            $table->integer('total_cases')->nullable();
            $table->integer('new_cases')->nullable();
            $table->integer('total_deaths')->nullable();
            $table->integer('new_deaths')->nullable();
            $table->integer('total_recovered')->nullable();
            $table->integer('active_cases')->nullable();
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
        Schema::dropIfExists('covid_data');
    }
}
