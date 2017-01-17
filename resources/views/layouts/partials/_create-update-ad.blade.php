<!-- ROW -->
<div class="row">

    <!-- COL MD 6 -->
    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top : 20px;">

        <h3 style="margin-bottom : 10px;">
            {!! trans( 'webpage-text.create-ad-phase-1-h3' ) !!}
        </h3>

    </div>
    <!-- End ... COL MD 6 -->

</div>
<!-- End ... ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-4">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'title' ) ? 'has-error' : '' }}">

            {!! Form::label( 'title', trans( 'webpage-text.create-ad-title-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'title', isset( $_COOKIE[ 'create_ad_title' ] ) ? $_COOKIE[ 'create_ad_title' ] : NULL , [ 'class' => 'form-control', 'id' => 'title', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'title' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'title' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 6 -->
    <div class="col-md-6 col-md-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'subtitle' ) ? 'has-error' : '' }}">

            {!! Form::label( 'subtitle', trans( 'webpage-text.create-ad-subtitle-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'subtitle', isset( $_COOKIE[ 'create_ad_subtitle' ] ) ? $_COOKIE[ 'create_ad_subtitle' ] : NULL, [ 'class' => 'form-control', 'id' => 'subtitle', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'subtitle' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'subtitle' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 6 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 8 -->
    <div class="col-md-8 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'description' ) ? 'has-error' : '' }}">

            {!! Form::label( 'description', trans( 'webpage-text.create-ad-description-placeholder' ) ) !!}
             <i class="ion-star mandatory"></i>{!! Form::textarea( 'description', isset( $_COOKIE[ 'create_ad_description' ] ) ? $_COOKIE[ 'create_ad_description' ] : NULL, [ 'class' => 'form-control', 'id' => 'description', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'description' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'description' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 8 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'country' ) ? 'has-error' : '' }}">

           {!! Form::label( 'country', trans( 'webpage-text.create-ad-country-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::select( 'country', $countries, isset( $_COOKIE[ 'create_ad_country' ] ) ? $_COOKIE[ 'create_ad_country' ] : NULL, [ 'class' => 'form-control', 'id' => 'country', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'country' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'country' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD 3 -->
    <div class="col-md-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'city' ) ? 'has-error' : '' }}">

            {!! Form::label( 'city', trans( 'webpage-text.create-ad-city-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'city', isset( $_COOKIE[ 'create_ad_city' ] ) ? $_COOKIE[ 'create_ad_city' ] : NULL, [ 'class' => 'form-control', 'id' => 'city', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'city' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'city' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 2 -->
    <div class="col-md-2 col-md-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'zip' ) ? 'has-error' : '' }}">

            {!! Form::label( 'zip', trans( 'webpage-text.create-ad-zip-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'zip', isset( $_COOKIE[ 'create_ad_zip' ] ) ? $_COOKIE[ 'create_ad_zip' ] : NULL, [ 'class' => 'form-control', 'id' => 'zip', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'zip' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'zip' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 2 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'address' ) ? 'has-error' : '' }}">

            {!! Form::label( 'address', trans( 'webpage-text.create-ad-address-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'address', isset( $_COOKIE[ 'create_ad_address' ] ) ? $_COOKIE[ 'create_ad_address' ] : NULL, [ 'class' => 'form-control', 'id' => 'address', 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'address' ) )

                <span class="help-block">
                    <strong>{{ $errors->first( 'address' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ============================================================ -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 6 -->
    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top : 50px;">

        <h3>
            {!! trans( 'webpage-text.create-ad-phase-2-h3' ) !!}
        </h3>

    </div>
    <!-- End ... COL MD 6 -->

</div>
<!-- End ... ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'ramp', trans( 'webpage-text.create-ad-accessibility-1' ) ) !!}
            {!! Form::checkbox( 'ramp', NULL , isset( $_COOKIE[ 'create_ad_ramp' ] ) ? $_COOKIE[ 'create_ad_ramp' ] : NULL, [ 'id' => 'ramp' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'lift', trans( 'webpage-text.create-ad-accessibility-2' ) ) !!}
            {!! Form::checkbox( 'lift', NULL , isset( $_COOKIE[ 'create_ad_lift' ] ) ? $_COOKIE[ 'create_ad_lift' ] : NULL, [ 'id' => 'lift' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'parking', trans( 'webpage-text.create-ad-accessibility-3' ) ) !!}
            {!! Form::checkbox( 'parking', NULL , isset( $_COOKIE[ 'create_ad_parking' ] ) ? $_COOKIE[ 'create_ad_parking' ] : NULL, [ 'id' => 'parking' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'garden', trans( 'webpage-text.create-ad-accessibility-4' ) ) !!}
            {!! Form::checkbox( 'garden', NULL , isset( $_COOKIE[ 'create_ad_garden' ] ) ? $_COOKIE[ 'create_ad_garden' ] : NULL, [ 'id' => 'garden' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'bedroom', trans( 'webpage-text.create-ad-accessibility-5' ) ) !!}
            {!! Form::checkbox( 'bedroom', NULL , isset( $_COOKIE[ 'create_ad_bedroom' ] ) ? $_COOKIE[ 'create_ad_bedroom' ] : NULL, [ 'id' => 'bedroom' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'circulation', trans( 'webpage-text.create-ad-accessibility-6' ) ) !!}
            {!! Form::checkbox( 'circulation', NULL , isset( $_COOKIE[ 'create_ad_circulation' ] ) ? $_COOKIE[ 'create_ad_circulation' ] : NULL, [ 'id' => 'circulation' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'kitchen_acessible', trans( 'webpage-text.create-ad-accessibility-7' ) ) !!}
            {!! Form::checkbox( 'kitchen_acessible', NULL , isset( $_COOKIE[ 'create_ad_kitchen_acessible' ] ) ? $_COOKIE[ 'create_ad_kitchen_acessible' ] : NULL, [ 'id' => 'kitchen_acessible' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'bathroom_acessible', trans( 'webpage-text.create-ad-accessibility-8' ) ) !!}
            {!! Form::checkbox( 'bathroom_acessible', NULL , isset( $_COOKIE[ 'create_ad_bathroom_acessible' ] ) ? $_COOKIE[ 'create_ad_bathroom_acessible' ] : NULL, [ 'id' => 'bathroom_acessible' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'shower_1', trans( 'webpage-text.create-ad-accessibility-9' ) ) !!}
            {!! Form::checkbox( 'shower_1', NULL , isset( $_COOKIE[ 'create_ad_shower_1' ] ) ? $_COOKIE[ 'create_ad_shower_1' ] : NULL, [ 'id' => 'shower_1' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'shower_2', trans( 'webpage-text.create-ad-accessibility-10' ) ) !!}
            {!! Form::checkbox( 'shower_2', NULL , isset( $_COOKIE[ 'create_ad_shower_2' ] ) ? $_COOKIE[ 'create_ad_shower_2' ] : NULL, [ 'id' => 'shower_2' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'wc', trans( 'webpage-text.create-ad-accessibility-11' ) ) !!}
            {!! Form::checkbox( 'wc', NULL , isset( $_COOKIE[ 'create_ad_wc' ] ) ? $_COOKIE[ 'create_ad_wc' ] : NULL, [ 'id' => 'wc' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'transports', trans( 'webpage-text.create-ad-accessibility-12' ) ) !!}
            {!! Form::checkbox( 'transports', NULL , isset( $_COOKIE[ 'create_ad_transports' ] ) ? $_COOKIE[ 'create_ad_transports' ] : NULL, [ 'id' => 'transports' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ============================================================ -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 6 -->
    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top : 40px;">

        <h3>
            {!! trans( 'webpage-text.create-ad-phase-3-h3' ) !!}
        </h3>

    </div>
    <!-- End ... COL MD 6 -->

</div>
<!-- End ... ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'tv', trans( 'webpage-text.create-ad-equpement-1' ) ) !!}
            {!! Form::checkbox( 'tv', NULL , isset( $_COOKIE[ 'create_ad_tv' ] ) ? $_COOKIE[ 'create_ad_tv' ] : NULL, [ 'id' => 'tv' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'home_cinema', trans( 'webpage-text.create-ad-equpement-2' ) ) !!}
            {!! Form::checkbox( 'home_cinema', NULL , isset( $_COOKIE[ 'create_ad_home_cinema' ] ) ? $_COOKIE[ 'create_ad_home_cinema' ] : NULL, [ 'id' => 'home_cinema' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'computer', trans( 'webpage-text.create-ad-equpement-3' ) ) !!}
            {!! Form::checkbox( 'computer', NULL , isset( $_COOKIE[ 'create_ad_computer' ] ) ? $_COOKIE[ 'create_ad_computer' ] : NULL, [ 'id' => 'computer' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'internet', trans( 'webpage-text.create-ad-equpement-4' ) ) !!}
            {!! Form::checkbox( 'internet', NULL , isset( $_COOKIE[ 'create_ad_internet' ] ) ? $_COOKIE[ 'create_ad_internet' ] : NULL, [ 'id' => 'internet' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'wifi', trans( 'webpage-text.create-ad-equpement-5' ) ) !!}
            {!! Form::checkbox( 'wifi', NULL , isset( $_COOKIE[ 'create_ad_wifi' ] ) ? $_COOKIE[ 'create_ad_wifi' ] : NULL, [ 'id' => 'wifi' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'phone', trans( 'webpage-text.create-ad-equpement-6' ) ) !!}
            {!! Form::checkbox( 'phone', NULL , isset( $_COOKIE[ 'create_ad_phone' ] ) ? $_COOKIE[ 'create_ad_phone' ] : NULL, [ 'id' => 'phone' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'dishwasher', trans( 'webpage-text.create-ad-equpement-7' ) ) !!}
            {!! Form::checkbox( 'dishwasher', NULL , isset( $_COOKIE[ 'create_ad_dishwasher' ] ) ? $_COOKIE[ 'create_ad_dishwasher' ] : NULL, [ 'id' => 'dishwasher' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'washing_machine', trans( 'webpage-text.create-ad-equpement-8' ) ) !!}
            {!! Form::checkbox( 'washing_machine', NULL , isset( $_COOKIE[ 'create_ad_washing_machine' ] ) ? $_COOKIE[ 'create_ad_washing_machine' ] : NULL, [ 'id' => 'washing_machine' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'dryer', trans( 'webpage-text.create-ad-equpement-9' ) ) !!}
            {!! Form::checkbox( 'dryer', NULL , isset( $_COOKIE[ 'create_ad_dryer' ] ) ? $_COOKIE[ 'create_ad_dryer' ] : NULL, [ 'id' => 'dryer' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'oven', trans( 'webpage-text.create-ad-equpement-10' ) ) !!}
            {!! Form::checkbox( 'oven', NULL , isset( $_COOKIE[ 'create_ad_oven' ] ) ? $_COOKIE[ 'create_ad_oven' ] : NULL, [ 'id' => 'oven' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'fridge', trans( 'webpage-text.create-ad-equpement-11' ) ) !!}
            {!! Form::checkbox( 'fridge', NULL , isset( $_COOKIE[ 'create_ad_fridge' ] ) ? $_COOKIE[ 'create_ad_fridge' ] : NULL, [ 'id' => 'fridge' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'freezer', trans( 'webpage-text.create-ad-equpement-12' ) ) !!}
            {!! Form::checkbox( 'freezer', NULL , isset( $_COOKIE[ 'create_ad_freezer' ] ) ? $_COOKIE[ 'create_ad_freezer' ] : NULL, [ 'id' => 'freezer' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 4 -->
    <div class="col-md-4 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'microwave', trans( 'webpage-text.create-ad-equpement-13' ) ) !!}
            {!! Form::checkbox( 'microwave', NULL , isset( $_COOKIE[ 'create_ad_microwave' ] ) ? $_COOKIE[ 'create_ad_microwave' ] : NULL, [ 'id' => 'microwave' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

    <!-- COL MD 4 -->
    <div class="col-md-4">

        <!-- FORM GROUP -->
        <div class="form-group text-center">

            {!! Form::label( 'coffee_machine', trans( 'webpage-text.create-ad-equpement-14' ) ) !!}
            {!! Form::checkbox( 'coffee_machine', NULL , isset( $_COOKIE[ 'create_ad_coffee_machine' ] ) ? $_COOKIE[ 'create_ad_coffee_machine' ] : NULL, [ 'id' => 'coffee_machine' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 4 -->

</div>
<!-- End ...ROW -->

<!-- ============================================================ -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 6 -->
    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top : 40px;">

        <h3>
            {!! trans( 'webpage-text.create-ad-phase-4-h3' ) !!}
        </h3>

    </div>
    <!-- End ... COL MD 6 -->

</div>
<!-- End ... ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'livingroom' ) ? 'has-error' : '' }}">

           {!! Form::label( 'livingroom', trans( 'webpage-text.create-ad-room-1' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'livingroom', isset( $_COOKIE[ 'create_ad_livingroom' ] ) ? $_COOKIE[ 'create_ad_livingroom' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'livingroom', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'livingroom' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'livingroom' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'dining_room' ) ? 'has-error' : '' }}">

            {!! Form::label( 'dining_room', trans( 'webpage-text.create-ad-room-2' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'dining_room', isset( $_COOKIE[ 'create_ad_dining_room' ] ) ? $_COOKIE[ 'create_ad_dining_room' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'dining_room', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'dining_room' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'dining_room' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'kitchen' ) ? 'has-error' : '' }}">

           {!! Form::label( 'kitchen', trans( 'webpage-text.create-ad-room-3' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'kitchen', isset( $_COOKIE[ 'create_ad_kitchen' ] ) ? $_COOKIE[ 'create_ad_kitchen' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'kitchen', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'kitchen' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'kitchen' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'kitchenette' ) ? 'has-error' : '' }}">

            {!! Form::label( 'kitchenette', trans( 'webpage-text.create-ad-room-4' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'kitchenette', isset( $_COOKIE[ 'create_ad_kitchenette' ] ) ? $_COOKIE[ 'create_ad_kitchenette' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'kitchenette', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'kitchenette' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'kitchenette' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'bathroom' ) ? 'has-error' : '' }}">

           {!! Form::label( 'bathroom', trans( 'webpage-text.create-ad-room-5' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'bathroom', isset( $_COOKIE[ 'create_ad_bathroom' ] ) ? $_COOKIE[ 'create_ad_bathroom' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'bathroom', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'bathroom' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'bathroom' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'separed_wc' ) ? 'has-error' : '' }}">

            {!! Form::label( 'separed_wc', trans( 'webpage-text.create-ad-room-6' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'separed_wc', isset( $_COOKIE[ 'create_ad_separed_wc' ] ) ? $_COOKIE[ 'create_ad_separed_wc' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'separed_wc', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'separed_wc' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'separed_wc' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'garage' ) ? 'has-error' : '' }}">

           {!! Form::label( 'garage', trans( 'webpage-text.create-ad-room-9' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'garage', isset( $_COOKIE[ 'create_ad_garage' ] ) ? $_COOKIE[ 'create_ad_garage' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'garage', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'garage' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'garage' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'cave' ) ? 'has-error' : '' }}">

            {!! Form::label( 'cave', trans( 'webpage-text.create-ad-room-10' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'cave', isset( $_COOKIE[ 'create_ad_cave' ] ) ? $_COOKIE[ 'create_ad_cave' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'cave', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'cave' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'cave' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'double_bedroom' ) ? 'has-error' : '' }}">

           {!! Form::label( 'double_bedroom', trans( 'webpage-text.create-ad-room-7' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'double_bedroom', isset( $_COOKIE[ 'create_ad_double_bedroom' ] ) ? $_COOKIE[ 'create_ad_double_bedroom' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'double_bedroom', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'double_bedroom' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'double_bedroom' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'simple_bedroom' ) ? 'has-error' : '' }}">

            {!! Form::label( 'simple_bedroom', trans( 'webpage-text.create-ad-room-8' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'simple_bedroom', isset( $_COOKIE[ 'create_ad_simple_bedroom' ] ) ? $_COOKIE[ 'create_ad_simple_bedroom' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'simple_bedroom', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'simple_bedroom' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'simple_bedroom' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'nb_double_bed' ) ? 'has-error' : '' }}">

           {!! Form::label( 'nb_double_bed', trans( 'webpage-text.create-ad-nb-double-bed-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'nb_double_bed', isset( $_COOKIE[ 'create_ad_nb_double_bed' ] ) ? $_COOKIE[ 'create_ad_nb_double_bed' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'nb_double_bed', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'nb_double_bed' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'nb_double_bed' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'nb_simple_bed' ) ? 'has-error' : '' }}">

            {!! Form::label( 'nb_simple_bed', trans( 'webpage-text.create-ad-nb-simple-bed-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'nb_simple_bed', isset( $_COOKIE[ 'create_ad_nb_simple_bed' ] ) ? $_COOKIE[ 'create_ad_nb_simple_bed' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'nb_simple_bed', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'nb_simple_bed' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'nb_simple_bed' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'nb_baby_bed' ) ? 'has-error' : '' }}">

           {!! Form::label( 'nb_baby_bed', trans( 'webpage-text.create-ad-nb-baby-bed-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'nb_baby_bed', isset( $_COOKIE[ 'create_ad_nb_baby_bed' ] ) ? $_COOKIE[ 'create_ad_nb_baby_bed' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'nb_baby_bed', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'nb_baby_bed' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'nb_baby_bed' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

    <!-- COL MD  3-->
    <div class="col-md-3 col-md-offset-1">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'nb_sofa_bed' ) ? 'has-error' : '' }}">

            {!! Form::label( 'nb_sofa_bed', trans( 'webpage-text.create-ad-nb-sofa-bed-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'nb_sofa_bed', isset( $_COOKIE[ 'create_ad_nb_sofa_bed' ] ) ? $_COOKIE[ 'create_ad_nb_sofa_bed' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'nb_sofa_bed', 'placeholder' => trans( 'webpage-text.create-ad-nb-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'nb_sofa_bed' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'nb_sofa_bed' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 3 -->
    <div class="col-md-3 col-md-offset-3 col-sm-offset-3">

        <!-- FORM GROUP -->
        <div class="form-group relative {{ $errors->first( 'housing_area' ) ? 'has-error' : '' }}">

           {!! Form::label( 'housing_area', trans( 'webpage-text.create-ad-housing-area-placeholder' ) ) !!}
            <i class="ion-star mandatory"></i>{!! Form::text( 'housing_area', isset( $_COOKIE[ 'create_ad_housing_area' ] ) ? $_COOKIE[ 'create_ad_housing_area' ] : NULL, [ 'class' => 'form-control', 'style' => 'width : 60px; float : right;', 'id' => 'housing_area', 'placeholder' => trans( 'webpage-text.create-ad-m2-placeholder' ), 'required' ] ) !!}

            <!-- ERROR -->
            @if( $errors->has( 'housing_area' ) )

                <span class="help-block text-right">
                    <strong>{{ $errors->first( 'housing_area' ) }}</strong>
                </span>

            @endif
            <!-- End ... ERROR -->

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 3 -->

</div>
<!-- End ...ROW -->

<!-- ============================================================ -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 6 -->
    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top : 40px;">

        <h3>
            {!! trans( 'webpage-text.create-ad-phase-5-h3' ) !!}
        </h3>

    </div>
    <!-- End ... COL MD 6 -->

</div>
<!-- End ... ROW -->

<!-- ROW -->
<div class="row">

    <!-- COL MD 8 -->
    <div class="col-md-8 col-md-offset-2">

        <!-- FORM GROUP -->
        <div class="form-group relative">

            {!! Form::textarea( 'interior_rules', isset( $_COOKIE[ 'create_ad_rules' ] ) ? $_COOKIE[ 'create_ad_rules' ] : NULL, [ 'class' => 'form-control', 'id' => 'interior_rules' ] ) !!}

        </div>
        <!-- End ... FORM GROUP -->

    </div>
    <!-- End ... COL MD 8 -->

</div>
<!-- End ...ROW -->
