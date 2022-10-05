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
        Schema::create('Browser', function (Blueprint $table)
        {
            $table->id();
            $table->string("Browser_name");
            $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            $table->string("nb_users");
            $table->string("nb_actions");
            $table->string("sum_Visit_length");
            $table->string("bounce_count");
            $table->string("nb_visits_convertes");
            $table->string("logo");
            $table->string("segment");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("Browser");
    }
};
