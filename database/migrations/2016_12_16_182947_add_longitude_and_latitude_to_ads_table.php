<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLongitudeAndLatitudeToAdsTable extends Migration
    {

    public function up()
        {

        Schema::table( 'ads', function( Blueprint $table )
            {

            $table->decimal( 'longitude', 10, 6 )->nullable()->after( 'address' );
            $table->decimal( 'latitude', 10, 6 )->nullable()->after( 'longitude' );

            } );

        }

    // ----------

    public function down()
        {

        Schema::table( 'ads', function( Blueprint $table )
            {

            $table->dropColumn( 'longitude' );
            $table->dropColumn( 'latitude' );

            } );

        }

    }
