@extends( 'layouts.full-page' )

<!-- ============================================================ -->

@section( 'content' )

    <!-- SECTION -->
    <section class="section-login">

	    <!-- ROW -->
	    <div class="row">

	        <!-- COL MD 6 -->
	        <div class="col-md-6 col-md-offset-3">

	            <h2>
	                {!! trans( 'webpage-text.login-h2' ) !!}
	            </h2>

	        </div>
	        <!-- End ... COL MD 6 -->

	    </div>
	    <!-- End ... ROW -->

	    <!-- ROW -->
	    <div class="row">

	        {!! Form::open( [ 'route' => 'post-login', 'class' => 'login-form', 'id' => 'login-form' ] ) !!}

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		        <!-- ROW -->
		        <div class="row" style="margin-bottom : 0;">

	                <!-- COL MD 4 -->
	                <div class="col-md-4 col-md-offset-4">

			            <!-- FORM GROUP -->
			            <div class="form-group relative{{ ( $errors->has( 'username' ) || preg_match( '/error/', session( 'message' ) ) ) ? ' has-error' : '' }}">

							{!! Form::label( 'username', trans( 'webpage-text.login-username-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::text( 'username', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'username' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'username' ) }}</strong>
		                        </span>

		                    @elseif( preg_match( '/error/', session( 'message' ) ) )

		                        <span class="help-block">
		                            <strong>{{ trans( 'webpage-text.login-not-valid' ) }}</strong>
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
			            <div class="form-group relative{{ ( $errors->has( 'password' ) || preg_match( '/error/', session( 'message' ) ) ) ? ' has-error' : '' }}">

							{!! Form::label( 'password', trans( 'webpage-text.login-password-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::password( 'password', [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'password' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'password' ) }}</strong>
		                        </span>

		                    @elseif( preg_match( '/error|Erreur/i', session( 'message' ) ) )

		                        <span class="help-block">
		                            <strong>{{ trans( 'webpage-text.login-not-valid' ) }}</strong>
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

	                        {!! Form::submit( trans( 'webpage-text.login-submit' ), [ 'class' => 'btn btn-full', 'id' => 'registration-submit-button' ] ) !!}

							<a href="{{ route( 'reset-password' ) }}" class="simple-link">Mot de passe oublié ?</a>

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
