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

            <!-- COL MD 4 -->
            <div class="col-md-4 col-md-offset-4 text-center">

                <section class="section-avatar">

                    {!! Form::open( [ 'route' => 'upload-avatar', 'class' => 'avatar-form', 'id' => 'avatar-form', 'files' => TRUE ] ) !!}

                        <div class="image-upload">

                            <label for="avatar">
                                <img src="{{ asset( Sentinel::getUser()->avatar ) }}?{{ rand() }}" id="image-avatar" alt="{!! trans( 'webpage-text.user-avatar-alt' ) !!}">
                            </label>

                            <input id="avatar" name="avatar" type="file">

                        </div>

                    {!! Form::close() !!}

                    <div class="progress">

                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span class="sr-only">0%</span>
                        </div>

                    </div>

                </section>

            </div>
            <!-- End ... COL MD 4 -->

        </div>
        <!-- End ...ROW -->

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 6 -->
            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-8 col-md-offset-4">

                        <h3 class="text-center">
                            Infos
                        </h3>

                    </div>

                </div>

                {!! Form::model( Sentinel::getUser(), [ 'route' => 'post-profile', 'class' => 'profile-form', 'id' => 'profile-form' ] ) !!}

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'username' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 col-md-offset-4">

                                {!! Form::text( 'username', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.profile-placeholder-1' ), 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'username' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'username' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 col-md-offset-4">

                                {!! Form::email( 'email', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.profile-placeholder-2' ), 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'email' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'email' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group">

                            <!-- COL MD 8 -->
                            <div class="col-md-8 col-md-offset-4">

                                {!! Form::submit( trans( 'webpage-text.profile-submit' ), [ 'class' => 'btn btn-full', 'id' => 'profile-submit-button' ] ) !!}

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                {!! Form::close() !!}

            </div>
            <!-- End ... COL MD 6 -->

            <!-- COL MD 6 -->
            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-8">

                        <h3 class="text-center">
                            Mot de passe
                        </h3>

                    </div>

                </div>

                {!! Form::open( [ 'route' => 'new-password', 'class' => 'new-password-form', 'id' => 'new-password-form' ] ) !!}

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'old_password' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8">

                                {!! Form::password( 'old_password', [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.new-password-placeholder-1' ), 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'old_password' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'old_password' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'password' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8">

                                {!! Form::password( 'password', [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.new-password-placeholder-2' ), 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'password' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'password' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group{{ $errors->has( 'password_confirmation' ) ? ' has-error' : '' }}">

                            <!-- COL MD 8 -->
                            <div class="col-md-8">

                                {!! Form::password( 'password_confirmation', [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.new-password-placeholder-3' ), 'required' ] ) !!}

                                <!-- ERROR -->
                                @if( $errors->has( 'password_confirmation' ) )

                                    <span class="help-block">
                                        <strong>{{ $errors->first( 'password_confirmation' ) }}</strong>
                                    </span>

                                @endif
                                <!-- End ... ERROR -->

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- FORM GROUP -->
                        <div class="form-group">

                            <!-- COL MD 8 -->
                            <div class="col-md-8">

                                {!! Form::submit( trans( 'webpage-text.new-password-submit' ), [ 'class' => 'btn btn-full', 'id' => 'profile-submit-button' ] ) !!}

                            </div>
                            <!-- COL MD 8 -->

                        </div>
                        <!-- End ... FORM GROUP -->

                    </div>
                    <!-- End ... ROW -->

                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                {!! Form::close() !!}

            </div>
            <!-- End ... COL MD 6 -->

        </div>
        <!-- End ...ROW -->

@stop