@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-show-ads">

        <!-- ROW -->
        <div class="row">

            <h2>
                CHEZ PASCALINE ET CYRIL
            </h2>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 12 -->
            <div class="col-md-12">

                <p class="subtitle">
                    Havre de paix en face de la forêt
                </p>

            </div>
            <!-- End ... COL MD 12 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 8 -->
            <div class="col-md-8 col-md-offset-2 text-center">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
             </div>
            <!-- End ... COL MD 8 -->

        </div>
        <!-- End ... ROW -->

        <!-- ROW -->
        <div class="row">

            <div class="col-md-2 gallery">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
            </div>

            <div class="col-md-2 gallery">
                <img src="{{ asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.ad-picture-alt' ) !!}" class="img-responsive img-thumbnail">
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo voluptatum alias quis pariatur et. Tempora nesciunt consequatur quod, dolore excepturi reiciendis illum! Odit, voluptas, dicta! Quo nobis ducimus optio.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo voluptatum alias quis pariatur et. Tempora nesciunt consequatur quod, dolore excepturi reiciendis illum! Odit, voluptas, dicta! Quo nobis ducimus optio.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo voluptatum alias quis pariatur et. Tempora nesciunt consequatur quod, dolore excepturi reiciendis illum! Odit, voluptas, dicta! Quo nobis ducimus optio.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo voluptatum alias quis pariatur et. Tempora nesciunt consequatur quod, dolore excepturi reiciendis illum! Odit, voluptas, dicta! Quo nobis ducimus optio.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo voluptatum alias quis pariatur et. Tempora nesciunt consequatur quod, dolore excepturi reiciendis illum! Odit, voluptas, dicta! Quo nobis ducimus optio.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quo voluptatum alias quis pariatur et. Tempora nesciunt consequatur quod, dolore excepturi reiciendis illum! Odit, voluptas, dicta! Quo nobis ducimus optio.
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nisi officiis dignissimos nemo? Illum quae id aperiam fugit
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
                        <a href="#accessibility" data-toggle="tab">{!! trans( 'webpage-text.ad-tab-accessibility' ) !!}</a>
                    </li>

                    <li>
                        <a href="#equipments" data-toggle="tab">{!! trans( 'webpage-text.ad-tab-equipments' ) !!}</a>
                    </li>

                    <li>
                        <a href="#rooms" data-toggle="tab">{!! trans( 'webpage-text.ad-tab-rooms' ) !!}</a>
                    </li>

                    <li>
                        <a href="#environment" data-toggle="tab">{!! trans( 'webpage-text.ad-tab-environment' ) !!}</a>
                    </li>

                    <li>
                        <a href="#rules" data-toggle="tab">{!! trans( 'webpage-text.ad-tab-rules' ) !!}</a>
                    </li>

                    <li>
                        <a href="#map" data-toggle="tab">{!! trans( 'webpage-text.ad-tab-map' ) !!}</a>
                    </li>

                </ul>
                <!-- End ... NAV TABS -->

                <!-- TAB CONTENT -->
                <div class="tab-content">

                    <!-- ACCESSIBILITY -->
                    <div class="tab-pane active fade in" id="accessibility">
                        Accessibilité...
                    </div>
                    <!-- End ... ACCESSIBILITY -->

                    <!-- EQUIPMENTS -->
                    <div class="tab-pane fade" id="equipments">
                        Equipements...
                    </div>
                    <!-- End ... EQUIPMENTS -->

                    <!-- ROOMS -->
                    <div class="tab-pane fade" id="rooms">
                        Pièces...
                    </div>
                    <!-- End ... ROOMS -->

                    <!-- ENVIRONMENT -->
                    <div class="tab-pane fade" id="environment">
                        Environnement...
                    </div>
                    <!-- End ... ENVIRONMENT -->

                    <!-- RULES -->
                    <div class="tab-pane fade" id="rules">
                        Règlement...
                    </div>
                    <!-- End ... RULES -->

                    <!-- MAP -->
                    <div class="tab-pane fade" id="map">
                        Carte...
                    </div>
                    <!-- End ... MAP -->

                </div>
                <!-- End ... TAB CONTENT -->

            </div>
            <!-- End ... COL MD 12 -->

        </div>
        <!-- End ... ROW -->

@stop
