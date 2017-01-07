<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
    {

    public function up()
        {

        Schema::create( 'ads', function( Blueprint $table )
            {

            $table->increments( 'id' );
            $table->string( 'primary_photo' )->nullable();
            $table->string( 'title' );
            $table->string( 'subtitle' );
            $table->text( 'description' );
            $table->string( 'country' );
            $table->string( 'city' );
            $table->string( 'zip' );
            $table->string( 'address' );
            $table->boolean( 'ramp' )->nullable();
            $table->boolean( 'lift' )->nullable();
            $table->boolean( 'parking' )->nullable();
            $table->boolean( 'garden' )->nullable();
            $table->boolean( 'bedroom' )->nullable();
            $table->boolean( 'circulation' )->nullable();
            $table->boolean( 'kitchen_acessible' )->nullable();
            $table->boolean( 'bathroom_acessible' )->nullable();
            $table->boolean( 'shower_1' )->nullable();
            $table->boolean( 'shower_2' )->nullable();
            $table->boolean( 'wc' )->nullable();
            $table->boolean( 'transports' )->nullable();
            $table->boolean( 'tv' )->nullable();
            $table->boolean( 'home_cinema' )->nullable();
            $table->boolean( 'computer' )->nullable();
            $table->boolean( 'internet' )->nullable();
            $table->boolean( 'wifi' )->nullable();
            $table->boolean( 'phone' )->nullable();
            $table->boolean( 'dishwasher' )->nullable();
            $table->boolean( 'washing_machine' )->nullable();
            $table->boolean( 'dryer' )->nullable();
            $table->boolean( 'oven' )->nullable();
            $table->boolean( 'fridge' )->nullable();
            $table->boolean( 'freezer' )->nullable();
            $table->boolean( 'microwave' )->nullable();
            $table->boolean( 'coffee_machine' )->nullable();
            $table->boolean( 'livingroom' );
            $table->boolean( 'dining_room' );
            $table->boolean( 'kitchen' );
            $table->boolean( 'kitchenette' );
            $table->boolean( 'bathroom' );
            $table->boolean( 'separed_wc' );
            $table->boolean( 'garage' );
            $table->boolean( 'cave' );
            $table->boolean( 'double_bedroom' );
            $table->boolean( 'simple_bedroom' );
            $table->string( 'nb_double_bed' );
            $table->string( 'nb_simple_bed' );
            $table->string( 'nb_baby_bed' );
            $table->string( 'nb_sofa_bed' );
            $table->integer( 'housing_area' );
            $table->text( 'interior_rules' )->nullable();
            $table->string( 'photo_1' )->nullable();
            $table->string( 'photo_2' )->nullable();
            $table->string( 'photo_3' )->nullable();
            $table->string( 'photo_4' )->nullable();
            $table->string( 'photo_5' )->nullable();
            $table->string( 'photo_6' )->nullable();
            $table->integer( 'user_id' )->unsigned();
            $table->timestamps();

            } );

        }

    // ------------------------------------------------------------

    public function down()
        {

        Schema::dropIfExists( 'ads' );

        }

    }
