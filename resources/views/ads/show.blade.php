@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-show-ads">

        <!-- ROW -->
        <div class="row">

            <h2>
                {{ $ad->title }}
            </h2>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 12 -->
            <div class="col-md-12">

                <p class="subtitle">
                    {{ $ad->subtitle }}
                </p>

            </div>
            <!-- End ... COL MD 12 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row relative">

            <!-- COL MD 8 -->
            <div class="col-md-8 col-md-offset-2 text-center">
                <a href="{{ asset( str_replace ( 'thumbs', '', $ad->primary_photo ) ) }}" class="zoombox"><img src="{{ asset( $ad->primary_photo ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>
             </div>
            <!-- End ... COL MD 8 -->

        </div>
        <!-- End ... ROW -->

        <!-- ROW -->
        <div class="row secondaries_photos">

            <div class="col-md-2 gallery">
                <a href="{{ asset( str_replace( 'thumbs/', '', $ad->photo_1 ) ) }}" class="zoombox"><img src="{{ asset( $ad->photo_1 ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( $ad->photo_2 ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( $ad->photo_3 ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( $ad->photo_4 ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( $ad->photo_5 ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( $ad->photo_6 ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 8 -->
            <div class="col-md-8">

                <!-- ROW -->
                <div class="row">

                    <!-- DESCRIPTION -->
                    <div class="col-md-12 description">
                        {!! nl2br( $ad->description ) !!}
                    </div>
                    <!-- End ... DESCRIPTION -->

                </div>
                <!-- End ... ROW -->

            </div>
            <!-- End ... COL MD 8 -->

            <!-- PROFILE -->
            <div class="col-md-4 profile text-center">

                <p style="margin-bottom : 20px;">

                    <img src="{{ Sentinel::getUser()->avatar }}" alt="{!! trans( 'webpage-text.user-avatar-alt' ) !!}">
                    <br>
                    {{ Sentinel::getUser()->username }}

                </p>

                <p class="user-description">
                    {!! nl2br( Sentinel::getUser()->description ) !!}
                </p>

                <p>
                    <a href="#" class="btn btn-full" style="margin : 0;">Contacter</a>
                </p>

                <p>
                    <a href="#" class="simple-link">Signaler un abus</a>
                </p>

            </div>
            <!-- End ... PROFILE -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 12 -->
            <div class="col-md-12">

                <!-- NAV TABS -->
                <ul class="nav nav-tabs nav-justified">

                    <li class="active">
                        <a href="#accessibility" data-toggle="tab" id="tab_1">{!! trans( 'webpage-text.ad-tab-accessibility' ) !!}</a>
                    </li>

                    <li>
                        <a href="#equipments" data-toggle="tab" id="tab_2">{!! trans( 'webpage-text.ad-tab-equipments' ) !!}</a>
                    </li>

                    <li>
                        <a href="#rooms" data-toggle="tab" id="tab_3">{!! trans( 'webpage-text.ad-tab-rooms' ) !!}</a>
                    </li>

                    <li>
                        <a href="#rules" data-toggle="tab" id="tab_4">{!! trans( 'webpage-text.ad-tab-rules' ) !!}</a>
                    </li>

                    <li>
                        <a href="#address" data-toggle="tab" id="tab_5">{!! trans( 'webpage-text.ad-tab-map' ) !!}</a>
                    </li>

                </ul>
                <!-- End ... NAV TABS -->

                <!-- TAB CONTENT -->
                <div class="tab-content">

                    <!-- ACCESSIBILITY -->
                    <div class="tab-pane active fade in" id="accessibility">

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Rampe d'accès aux normes<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Ascenseur accessible<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Parking aux normes<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Jardin / cour accessible<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Chambres accessibles<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Couloirs aux normes<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Cuisine accessibles<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Salle de bain aux normes<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Douche accessibles<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Baignoire accessibles<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                WC accessibles<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Transports en communs accessibles<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                    </div>
                    <!-- End ... ACCESSIBILITY -->

                    <!-- EQUIPMENTS -->
                    <div class="tab-pane fade" id="equipments">

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Télévision<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Home cinéma<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Ordinateur<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Internet<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                WiFi<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Téléphone<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Lave vaisselle<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Lave linge<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Sèche linge<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Four<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Réfrigérateur<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Congélateur<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Micro ondes<i class="ion-close-round error"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                Machine à café<i class="ion-checkmark-round success"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                    </div>
                    <!-- End ... EQUIPMENTS -->

                    <!-- ROOMS -->
                    <div class="tab-pane fade" id="rooms">

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Salon<strong>1</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                Salle à manger<strong>1</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Cuisine<strong>1</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                Kitchenette<strong>1</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Salle de bain<strong>1</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                WC séparé<strong>1</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Garage<strong>1</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                Cave<strong>1</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Chambre double<strong>1</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                Chambre simple<strong>1</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Nombre lit double<strong>1</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                Nombre lit simple<strong>2</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                Nombre lits d'enfants<strong>0</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                Nombre canapé lit<strong>1</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                    </div>
                    <!-- End ... ROOMS -->

                    <!-- RULES -->
                    <div class="tab-pane fade" id="rules">

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptate perferendis voluptates nemo facere, corrupti delectus porro asperiores. Architecto quidem quisquam est veritatis ex, qui explicabo commodi doloremque praesentium eum!
                        <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptate perferendis voluptates nemo facere, corrupti delectus porro asperiores. Architecto quidem quisquam est veritatis ex, qui explicabo commodi doloremque praesentium eum!
                        <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptate perferendis voluptates nemo facere, corrupti delectus porro asperiores. Architecto quidem quisquam est veritatis ex, qui explicabo commodi doloremque praesentium eum!

                    </div>
                    <!-- End ... RULES -->

                    <!-- MAP -->
                    <div class="tab-pane fade text-center" id="address">

                        {{ $ad->address }}
                        <br>
                        {{ $ad->zip }} {{ $ad->city }} - {{ $ad->country }}

                    </div>
                    <!-- End ... MAP -->

                </div>
                <!-- End ... TAB CONTENT -->

                <!-- MAP -->
                <div id="map">
                </div>
                <!-- End ...MAP -->

            </div>
            <!-- End ... COL MD 12 -->

        </div>
        <!-- End ... ROW -->

        <script>

            var map;

            function initMap()
                {

                map = new google.maps.Map( document.getElementById( 'map' ),
                    {

                    center: { lat : 35, lng : -85 },
                    zoom: 16

                    } );

                var geocoder = new google.maps.Geocoder();
                var address = my_address;

                geocoder.geocode( { address : address }, function( results, status )
                    {

                    if( status === google.maps.GeocoderStatus.OK  )
                        {

                        var myOptions =
                            {

                            zoom: 16,
                            center: results[0].geometry.location,
                            mapTypeId: google.maps.MapTypeId.ROADMAP

                            }

                        map = new google.maps.Map(document.getElementById("map"), myOptions);

                        var marker = new google.maps.Marker(
                            {

                            map: map,
                            position: results[ 0 ].geometry.location

                            } );

                        }

                    } );

                }

        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCloPB2xIw-U4mx1zx_Z4FHpz3INzAP06U&callback=initMap"
        async defer></script>

@stop
