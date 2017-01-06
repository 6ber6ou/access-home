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

                @if( array_key_exists( 0, $photos ) )

                    @if( file_exists( $photos[ 0 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 0 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 0 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

             </div>
            <!-- End ... COL MD 8 -->

        </div>
        <!-- End ... ROW -->

        <!-- ROW -->
        <div class="row secondaries_photos">

            <div class="col-md-2 gallery">

                @if( array_key_exists( 1, $photos ) )

                    @if( file_exists( $photos[ 1 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 1 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 1 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

            </div>

            <div class="col-md-2 gallery">

                @if( array_key_exists( 2, $photos ) )

                    @if( file_exists( $photos[ 2 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 2 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 2 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

            </div>

            <div class="col-md-2 gallery">

                @if( array_key_exists( 3, $photos ) )

                    @if( file_exists( $photos[ 3 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 3 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 3 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

            </div>

            <div class="col-md-2 gallery">

                @if( array_key_exists( 4, $photos ) )

                    @if( file_exists( $photos[ 4 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 4 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 4 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

            </div>

            <div class="col-md-2 gallery">

                @if( array_key_exists( 5, $photos ) )

                    @if( file_exists( $photos[ 5 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 5 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 5 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

           </div>

            <div class="col-md-2 gallery">

                @if( array_key_exists( 6, $photos ) )

                    @if( file_exists( $photos[ 6 ] ) )

                        <a href="{{ asset( str_replace ( 'thumbs', '', $photos[ 6 ] ) ) }}" class="imageLightbox" data-imagelightbox="b"><img src="{{ asset( $photos[ 6 ] ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail"></a>

                    @endif

                @else

                    <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">

                @endif

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

                @if( Sentinel::getUser()->id != $ad->user->id )

                    <p>
                        <a href="#" class="btn btn-full" style="margin : 0;">Contacter</a>
                    </p>

                    <p>
                        <a href="#" class="simple-link">Signaler un abus</a>
                    </p>

                @endif

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
                                {{ trans( 'webpage-text.accessibility-ramp' ) }}<i class="{{ $ad->ramp ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-lift' ) }}<i class="{{ $ad->lift ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-parking' ) }}<i class="{{ $ad->parking ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-garden' ) }}<i class="{{ $ad->garden ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-bedroom' ) }}<i class="{{ $ad->bedroom ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-circulation' ) }}<i class="{{ $ad->circulation ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-kitchen' ) }}<i class="{{ $ad->kitchen_acessible ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-bathroom' ) }}<i class="{{ $ad->bathroom_acessible ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-shower-1' ) }}<i class="{{ $ad->shower_1 ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-shower-1' ) }}<i class="{{ $ad->shower_2 ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-wc' ) }}<i class="{{ $ad->wc ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.accessibility-transports' ) }}<i class="{{ $ad->transports ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
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
                                {{ trans( 'webpage-text.equipments-tv' ) }}<i class="{{ $ad->tv ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-home-cinema' ) }}<i class="{{ $ad->home_cinema ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-computer' ) }}<i class="{{ $ad->computer ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-internet' ) }}<i class="{{ $ad->internet ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-wifi' ) }}<i class="{{ $ad->wifi ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-phone' ) }}<i class="{{ $ad->phone ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-dishwasher' ) }}<i class="{{ $ad->dishwasher ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-washing-machine' ) }}<i class="{{ $ad->washing_machine ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-dryer' ) }}<i class="{{ $ad->dryer ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-oven' ) }}<i class="{{ $ad->oven ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-fridge' ) }}<i class="{{ $ad->fridge ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-freezer' ) }}<i class="{{ $ad->freezer ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-microwave' ) }}<i class="{{ $ad->microwave ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.equipments-coffee-machine' ) }}<i class="{{ $ad->coffee_machine ? 'ion-checkmark-round success' : 'ion-close-round error' }}"></i>
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
                                {{ trans( 'webpage-text.rooms-livingroom' ) }}<strong>{{ $ad->livingroom }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-dining-room' ) }}<strong>{{ $ad->dining_room }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-kitchen' ) }}<strong>{{ $ad->kitchen }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-kitchenette' ) }}<strong>{{ $ad->kitchenette }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-bathroom' ) }}<strong>{{ $ad->bathroom }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-separed-wc' ) }}<strong>{{ $ad->separed_wc }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-garage' ) }}<strong>{{ $ad->garage }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-cave' ) }}<strong>{{ $ad->cave }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-double-bedroom' ) }}<strong>{{ $ad->double_bedroom }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-simple-bedroom' ) }}<strong>{{ $ad->simple_bedroom }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-nb-double-bed' ) }}<strong>{{ $ad->nb_double_bed }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-nb-simple-bed' ) }}<strong>{{ $ad->nb_simple_bed }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-nb-baby-bed' ) }}<strong>{{ $ad->nb_baby_bed }}</strong>
                            </div>

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-nb-sofa-bed' ) }}<strong>{{ $ad->nb_sofa_bed }}</strong>
                            </div>

                        </div>
                        <!-- End ... ROW -->

                        <!-- ROW -->
                        <div class="row">

                            <div class="col-md-6 text-center">
                                {{ trans( 'webpage-text.rooms-housing-area' ) }}<strong>{{ $ad->housing_area }} m2</strong>
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

        <!-- ROW -->
        <div class="row" style="margin-top : 20px;">

            <div class="col-md-6 text-right">
                <a href="{{ route( 'ads.edit', $ad->id ) }}" class="btn btn-ghost">Modifier</a>
            </div>

            <div class="col-md-6 text-left delete_button">
                <a href="" class="btn btn-full">Supprimer</a>
            </div>

            <div class="no_yes_buttons">

                <div class="col-md-3" style="padding : 0; width: auto;">
                    <a href="" class="btn btn-ghost no_button" style="border-top-right-radius : 0; border-bottom-right-radius : 0;">{!! trans( 'webpage-text.no-text' ) !!}</a>
                </div>

                {!! Form::open( [ 'route' => [ 'delete-ad', $ad->id ], 'class' => 'form-delete-ad', 'style' => 'margin-top : 0;' ] ) !!}

                    <div class="col-md-3" style="padding : 0; width: auto;">
                        <input type="submit" class="btn btn-full yes_button" style="border-top-left-radius : 0; border-bottom-left-radius : 0;" value="{!! trans( 'webpage-text.yes-text' ) !!}">
                    </div>

                {!! Form::close() !!}

            </div>

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
