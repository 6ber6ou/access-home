@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-profil">

        <!-- ROW -->
        <div class="row">

            <h2>
                {!! trans( 'webpage-text.user-profil-h2' ) !!}
            </h2>

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            {!! Form::model( Sentinel::getUser(), [ 'route' => 'post-profile', 'class' => 'profile-form', 'id' => 'profile-form' ] ) !!}

                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                <!-- ROW -->
                <div class="row">

                    <!-- FORM GROUP -->
                    <div class="form-group{{ $errors->has( 'username' ) ? ' has-error' : '' }}">

                        <!-- COL MD 4 -->
                        <div class="col-md-4 col-md-offset-4">

                            {!! Form::text( 'username', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.profile-placeholder-1' ), 'required' ] ) !!}

                            <!-- ERROR -->
                            @if( $errors->has( 'username' ) )

                                <span class="help-block">
                                    <strong>{{ $errors->first( 'username' ) }}</strong>
                                </span>

                            @endif
                            <!-- End ... ERROR -->

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
                    <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

                        <!-- COL MD 4 -->
                        <div class="col-md-4 col-md-offset-4">

                            {!! Form::email( 'email', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.profile-placeholder-2' ), 'required' ] ) !!}

                            <!-- ERROR -->
                            @if( $errors->has( 'email' ) )

                                <span class="help-block">
                                    <strong>{{ $errors->first( 'email' ) }}</strong>
                                </span>

                            @endif
                            <!-- End ... ERROR -->

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

                            {!! Form::submit( trans( 'webpage-text.profile-submit' ), [ 'class' => 'btn btn-full', 'id' => 'profile-submit-button' ] ) !!}

                        </div>
                        <!-- COL MD 4 -->

                    </div>
                    <!-- End ... FORM GROUP -->

                </div>
                <!-- End ... ROW -->

                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

            {!! Form::close() !!}

        </div>
        <!-- End ...ROW -->

@stop
