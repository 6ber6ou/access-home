@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-edit-ads">

        <!-- ROW -->
        <div class="row">

            <h2>
                {!! trans( 'webpage-text.edit-ads-h2' ) !!}
            </h2>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <!-- RELATIVE -->
                <div class="relative" id="container_upload_primary_photo">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-primary-photo', 'id' => 'ad-primary-photo-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-primary-photo" class="upload-primary-photo">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->primary_photo;

							            }
							    	else
							    		{

							    		if( $ad->primary_photo != NULL )
							    			{

							    			$photo = $ad->primary_photo;

							    			}
							    		else
							    			{

							    			$photo = session()->get( 'primary_photo' );

							    			}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-primary-photo" name="ad-primary-photo" type="file">

                                <div class="progress progress-primary-photo col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->primary_photo || session()->get( 'primary_photo' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-primary-photo' ], 'class' => 'delete-ad-primary-photo-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_primary_photo', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-1', 'id' => 'ad-photo-1-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-1" class="upload-photo-1">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->photo_1;

							            }
							    	else
							    		{

										if( $ad->photo_1 )
											{

											$photo = $ad->photo_1;

											}
										else
											{

							    			$photo = session()->get( 'photo_1' );

											}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-photo-1" name="ad-photo-1" type="file">

                                <div class="progress progress-photo-1 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->photo_1 || session()->get( 'photo_1' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-1' ], 'class' => 'delete-ad-photo-1-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_1', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-2', 'id' => 'ad-photo-2-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-2" class="upload-photo-2">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->photo_2;

							            }
							    	else
							    		{

										if( $ad->photo_2 )
											{

											$photo = $ad->photo_2;

											}
										else
											{

							    			$photo = session()->get( 'photo_2' );

											}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-photo-2" name="ad-photo-2" type="file">

                                <div class="progress progress-photo-2 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->photo_2 || session()->get( 'photo_2' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-2' ], 'class' => 'delete-ad-photo-2-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_2', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-3', 'id' => 'ad-photo-3-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-3" class="upload-photo-3">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->photo_3;

							            }
							    	else
							    		{

										if( $ad->photo_3 )
											{

											$photo = $ad->photo_3;

											}
										else
											{

							    			$photo = session()->get( 'photo_3' );

											}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-photo-3" name="ad-photo-3" type="file">

                                <div class="progress progress-photo-3 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->photo_3 || session()->get( 'photo_3' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-3' ], 'class' => 'delete-ad-photo-3-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_3', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-4', 'id' => 'ad-photo-4-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-4" class="upload-photo-4">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->photo_4;

							            }
							    	else
							    		{

										if( $ad->photo_4 )
											{

											$photo = $ad->photo_4;

											}
										else
											{

							    			$photo = session()->get( 'photo_4' );

											}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-photo-4" name="ad-photo-4" type="file">

                                <div class="progress progress-photo-4 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->photo_4 || session()->get( 'photo_4' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-4' ], 'class' => 'delete-ad-photo-4-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_4', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-5', 'id' => 'ad-photo-5-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-5" class="upload-photo-5">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->photo_5;

							            }
							    	else
							    		{

										if( $ad->photo_5 )
											{

											$photo = $ad->photo_5;

											}
										else
											{

							    			$photo = session()->get( 'photo_5' );

											}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-photo-5" name="ad-photo-5" type="file">

                                <div class="progress progress-photo-5 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->photo_5 || session()->get( 'photo_5' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-5' ], 'class' => 'delete-ad-photo-5-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_5', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

            <!-- COL MD 2 -->
            <div class="col-md-2">

                <!-- RELATIVE -->
                <div class="relative">

                    <!-- PHOTO -->
                    {!! Form::open( [ 'route' => 'upload-ad-photo-6', 'id' => 'ad-photo-6-form', 'files' => TRUE ] ) !!}

                        {!! Form::hidden( 'redirect', '/ads/' . $ad->id . '/edit', [ 'id' => 'redirect' ] ) !!}

                        <div class="row text-center" style="margin-bottom : 0">

                            <div class="image-upload">

                                <label for="ad-photo-6" class="upload-photo-6">

                                	<?php

							        if( ! preg_match( '#ads/[0-9]*/edit#', $_SERVER[ 'HTTP_REFERER' ] ) )
							            {

							            $photo = $ad->photo_6;

							            }
							    	else
							    		{

										if( $ad->photo_6 )
											{

											$photo = $ad->photo_6;

											}
										else
											{

							    			$photo = session()->get( 'photo_6' );

											}

							    		}

                                	?>

                                    <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" class="img-responsive photo-frame" id="primary-photo">

                                </label>

                                <input id="ad-photo-6" name="ad-photo-6" type="file">

                                <div class="progress progress-photo-6 col-md-12">

                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <span class="sr-only">0%</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    {!! Form::close() !!}

                    <!-- DELETE -->
                    @if( $ad->photo_6 || session()->get( 'photo_6' ) )

                    {!! Form::open( [ 'route' => [ 'delete-ad-photo-6' ], 'class' => 'delete-ad-photo-6-form' ] ) !!}

						{!! Form::hidden( 'id', $ad->id ) !!}

                        {!! Form::button( '<i class="ion-close-round"></i>', [ 'type' => 'submit', 'id' => 'remove_photo_6', 'class' => 'btn btn-danger btn-circle' ] ) !!}

                    {!! Form::close() !!}

                    @endif
                    <!-- End ... DELETE -->

                </div>
                <!-- End ... RELATIVE -->

            </div>
            <!-- End ... COL MD 2 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 12 -->
            <div class="col-md-12 text-center" style="font-size : 70%;">

                <p style="margin-bottom : 0;">
                    {!! trans( 'webpage-text.upload-explication' ) !!}
                </p>

            </div>
            <!-- End ... COL MD 12 -->

        </div>
        <!-- End ...ROW -->

        <!-- ============================================================ -->

        <!-- FORM EDIT AD -->
        {!! Form::model( $ad, [ 'route' => [ 'ads.update', $ad->id ], 'method' => 'PUT', 'id' => 'create-ad' ] ) !!}

            <!-- ============================================================ -->

			@include( 'layouts.partials._create-update-ad' )

            <!-- ============================================================ -->

            <!-- ROW -->
            <div class="row" style="margin-top : 30px;">

                <!-- COL MD 6 -->
                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {!! Form::submit( trans( 'webpage-text.create-ad-update' ), [ 'class' => 'btn btn-full', 'id' => 'create-ad-phase-1-button' ] ) !!}
                </div>
                <!-- End ... COL MD 6 -->

            </div>
            <!-- End ...ROW -->

            <!-- ============================================================ -->

        {!! Form::close() !!}
    	<!-- End ... FORM EDIT AD -->

	</section>
   <!-- End ... SECTION -->

@stop
