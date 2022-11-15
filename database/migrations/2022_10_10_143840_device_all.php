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
         Schema::create('device_brands', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("Devices_name");
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
            $table->datetime("created_at");
            $table->datetime("updated_at");


        });

          Schema::create('device_types', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("Devices_type");
           // $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            //$table->string("nb_actions");
           // $table->string("nb_users");
           // $table->string("max_actions");
            //$table->string("sum_Visit_length");
            //$table->string("bounce_count");
            //$table->string("nb_visits_converted");
            $table->string("logo");
            $table->string("segment");
            $table->timestamp("time");
            $table->datetime("created_at");
            $table->datetime("updated_at");
        });
          Schema::create('screen_resolutions', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string("Screens_Resolution");
           // $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            //$table->string("nb_actions");
           // $table->string("nb_users");
           // $table->string("max_actions");
            //$table->string("sum_Visit_length");
            //$table->string("bounce_count");
            //$table->string("nb_visits_converted");
            //$table->string("logo");
            $table->string("segment");
            $table->timestamp("time");
            $table->datetime("created_at");
            $table->datetime("updated_at");
        });
        Schema::create('device_models', function (Blueprint $table){
             $table->increments("id");
            $table->string("Devices_model");
           // $table->string("nb_uniq_visitors");
            $table->string("nb_visits");
            //$table->string("nb_actions");
           // $table->string("nb_users");
           // $table->string("max_actions");
            //$table->string("sum_Visit_length");
            //$table->string("bounce_count");
            //$table->string("nb_visits_converted");
            //$table->string("logo");
            $table->string("segment");
            $table->timestamp("time");
            $table->datetime("created_at");
            $table->datetime("updated_at");
        }
    );
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::drop("device_brands");
     Schema::drop("device_types");
    }
};
