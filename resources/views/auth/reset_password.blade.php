@extends( 'layouts.full-page' )

<!-- ============================================================ -->

@section( 'content' )

    <!-- SECTION -->
    <section class="section-reset-password">

	    <!-- ROW -->
	    <div class="row">

	        <!-- COL MD 6 -->
	        <div class="col-md-6 col-md-offset-3">

	            <h2>
	                {!! trans( 'webpage-text.reset-password-h2' ) !!}
	            </h2>

	        </div>
	        <!-- End ... COL MD 6 -->

	    </div>
	    <!-- End ... ROW -->

	    <!-- ROW -->
	    <div class="row">

	        {!! Form::open( [ 'route' => 'post-reset-password', 'class' => 'reset-password-form', 'id' => 'reset-password-form' ] ) !!}

				<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

		        <!-- ROW -->
		        <div class="row">

	                <!-- COL MD 4 -->
	                <div class="col-md-4 col-md-offset-4">

			            <!-- FORM GROUP -->
			            <div class="form-group relative{{ $errors->has( 'reset-password' ) ? ' has-error' : '' }}">

							{!! Form::label( 'reset-password', trans( 'webpage-text.reset-password-email-placeholder' ) ) !!}
		                    <i class="ion-star mandatory"></i>{!! Form::email( 'reset-password', NULL, [ 'class' => 'form-control', 'required' ] ) !!}

		                    <!-- ERROR -->
		                    @if( $errors->has( 'reset-password' ) )

		                        <span class="help-block">
		                            <strong>{{ $errors->first( 'reset-password' ) }}</strong>
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

	                        {!! Form::submit( trans( 'webpage-text.reset-password-submit' ), [ 'class' => 'btn btn-full', 'id' => 'registration-submit-button' ] ) !!}

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
