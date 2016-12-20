<?php

// https://github.com/Stroemgren/Laravel-Country-Seed

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
    {

    public function up()
        {

        Schema::create( 'countries', function( $table )
            {

            $table->increments( 'id' );
            $table->string( 'code' );
            $table->string( 'name' );

            } );

        }

    // ------------------------------------------------------------

    public function down()
        {

        Schema::dropIfExists( 'countries' );

        }

    }
