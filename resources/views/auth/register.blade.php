@extends( 'layouts.full-page' )

<!-- ============================================================ -->

@section( 'content' )

    <!-- SECTION -->
    <section class="section-registration">

	    <!-- ROW -->
	    <div class="row">

	        <!-- COL MD 6 -->
	        <div class="col-md-6 col-md-offset-3">

	            <h2>
	                {!! trans( 'webpage-text.registration-h2' ) !!}
	            </h2>

	        </div>
	        <!-- End ... COL MD 6 -->

	    </div>
	    <!-- End ... ROW -->

	    <!-- ROW -->
	    <div class="row">

	        {!! Form::open( [ 'route' => 'post-register', 'class' => 'register-form', 'id' => 'register-form' ] ) !!}

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		        <!-- ROW -->
		        <div class="row" style="margin-bottom : 0;">

	                <!-- COL MD 4 -->
	                <div class="col-md-4 col-md-offset-4">

			            <!-- FORM GROUP -->
			            <div class="form-group relative{{ $errors->has( 'username' ) ? ' has-error' : '' }}">

							{!! Form::label( 'username', trans( 'webpage-text.registration-username-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::text( 'username', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'username' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'username' ) }}</strong>
		                        </span>

		                    @endif
		                    <!-- End ... ERROR -->

			            </div>
			            <!-- End ... FORM GROUP -->

	                </div>
	                <!-- COL MD 4 -->

		        </div>
		        <!-- End ... ROW -->

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		        <!-- ROW -->
		        <div class="row" style="margin-bottom : 0;">

	                <!-- COL MD 4 -->
	                <div class="col-md-4 col-md-offset-4">

			            <!-- FORM GROUP -->
			            <div class="form-group relative{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

							{!! Form::label( 'email', trans( 'webpage-text.registration-email-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::email( 'email', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'email' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'email' ) }}</strong>
		                        </span>

		                    @endif
		                    <!-- End ... ERROR -->

			            </div>
			            <!-- End ... FORM GROUP -->

	                </div>
	                <!-- COL MD 4 -->

		        </div>
		        <!-- End ... ROW -->

                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                @include( 'layouts.partials._anti-spam-field' )

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		        <!-- ROW -->
		        <div class="row" style="margin-bottom : 0;">

	                <!-- COL MD 4 -->
	                <div class="col-md-4 col-md-offset-4">

			            <!-- FORM GROUP -->
			            <div class="form-group relative{{ $errors->has( 'password' ) ? ' has-error' : '' }}">

							{!! Form::label( 'password', trans( 'webpage-text.registration-password-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::password( 'password', [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'password' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'password' ) }}</strong>
		                        </span>

		                    @endif
		                    <!-- End ... ERROR -->

			            </div>
			            <!-- End ... FORM GROUP -->

	                </div>
	                <!-- COL MD 4 -->

		        </div>
		        <!-- End ... ROW -->

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		        <!-- ROW -->
		        <div class="row">

	                <!-- COL MD 4 -->
	                <div class="col-md-4 col-md-offset-4">

			            <!-- FORM GROUP -->
			            <div class="form-group relative{{ $errors->has( 'password_confirmation' ) ? ' has-error' : '' }}">

							{!! Form::label( 'password_confirmation', trans( 'webpage-text.registration-password-confirmation-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::password( 'password_confirmation', [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'password_confirmation' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'password_confirmation' ) }}</strong>
		                        </span>

		                    @endif
		                    <!-- End ... ERROR -->

			            </div>
			            <!-- End ... FORM GROUP -->

	                </div>
	                <!-- COL MD 4 -->

		        </div>
		        <!-- End ... ROW -->

                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                <!-- ROW -->
                <div class="row">

                    <!-- FORM GROUP -->
                    <div class="form-group">

                        <!-- COL MD 4 -->
                        <div class="col-md-4 col-md-offset-4">

                            <!-- RECAPTCHA -->
                            <div class="g-recaptcha" data-sitekey="6Lc4_QwUAAAAABI_DcCeneTNY44PjJDLpV165Jll">
                            </div>
                            <!-- End ... RECAPTCHA -->

                        </div>
                        <!-- COL MD 4 -->

                    </div>
                    <!-- End ... FORM GROUP -->

                </div>
                <!-- End ... ROW -->

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

	            <!-- ROW -->
	            <div class="row">

	                <!-- FORM GROUP -->
	                <div class="form-group">

	                    <!-- COL MD 4 -->
	                    <div class="col-md-4 col-md-offset-4">

	                        {!! Form::submit( trans( 'webpage-text.registration-submit' ), [ 'class' => 'btn btn-full', 'id' => 'registration-submit-button' ] ) !!}

	                    </div>
	                    <!-- COL MD 4 -->

	                </div>
	                <!-- End ... FORM GROUP -->

	            </div>
	            <!-- End ... ROW -->

	        {!! Form::close() !!}

	    </div>
	    <!-- End ... ROW -->

    </section>
    <!-- End ... SECTION -->

@stop
