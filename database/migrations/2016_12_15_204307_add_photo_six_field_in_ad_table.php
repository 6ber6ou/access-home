<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoSixFieldInAdTable extends Migration
    {

    public function up()
        {

        Schema::table( 'ads', function( Blueprint $table )
            {

            $table->string( 'photo_6' )->nullable()->after( 'photo_5' );

            } );

        }

    // ------------------------------------------------------------

    public function down()
        {

        Schema::table( 'ads', function( Blueprint $table )
            {

            $table->dropColumn( 'photo_6' );

            } );
        }

    }
