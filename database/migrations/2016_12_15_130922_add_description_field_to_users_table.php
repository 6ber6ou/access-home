<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionFieldToUsersTable extends Migration
    {

    public function up()
        {

        Schema::table( 'users', function( Blueprint $table )
            {

            $table->text( 'description' )->after( 'avatar' )->nullable();

            } );

        }

    // ------------------------------------------------------------

    public function down()
        {

        Schema::table( 'users', function( Blueprint $table )
            {

            $table->dropColumn( 'description' );

            } );

        }

    }
