<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browsers', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("Browser_name");
            $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            $table->string("nb_actions");
            $table->string("nb_users");
            $table->string("max_actions");
            $table->string("sum_Visit_length");
            $table->string("bounce_count");
            $table->string("nb_visits_converted");
            $table->string("logo");
            $table->string("segment");
            $table->timestamp("time");
        });

        Schema::create('operatingsystems', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("os_name");
            $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            $table->string("nb_actions");
            $table->string("nb_users");
            $table->string("max_actions");
            $table->string("sum_Visit_length");
            $table->string("bounce_count");
            $table->string("nb_visits_converted");
            $table->string("logo");
            $table->timestamp("time");
        });

        Schema::create('plugins', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("plugins_name");
            $table->string("nb_visits");
            $table->string("nb_visits_percentage");
            $table->string("logo");
            $table->timestamp("time");
        });

        Schema::create('engines', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("engines_name");
            $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            $table->string("nb_actions");
            $table->string("nb_users");
            $table->string("max_actions");
            $table->string("sum_Visit_length");
            $table->string("bounce_count");
            $table->string("nb_visits_converted");
            $table->string("segment");
            $table->timestamp("time");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("browsers");
        Schema::drop("operatingsystems");
        Schema::drop("plugins");
        Schema::drop("engines");
    }
};
