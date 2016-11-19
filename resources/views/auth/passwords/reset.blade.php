@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 8 -->
            <div class="col-md-8 col-md-offset-2">

                <!-- PANEL -->
                <div class="panel panel-default">

                    <!-- PANEL HEADING -->
                    <div class="panel-heading">
                        Réinitialisation de votre mot de passe
                    </div>
                    <!-- End ... PANEL HEADING -->

                    <!-- PANEL BODY -->
                    <div class="panel-body">

                        <!-- FORM -->
                        <form class="form-horizontal" role="form" method="POST" action="{{ url( '/password/reset' ) }}">

                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <!-- FORM GROUP -->
                            <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">

                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old( 'email' ) }}" required autofocus>

                                    <!-- ERROR -->
                                    @if( $errors->has( 'email' ) )

                                        <span class="help-block">
                                            <strong>{{ $errors->first( 'email' ) }}</strong>
                                        </span>

                                    @endif
                                    <!-- End ... ERROR -->

                                </div>
                                <!-- End ... COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                            <!-- FORM GROUP -->
                            <div class="form-group{{ $errors->has( 'password' ) ? ' has-error' : '' }}">

                                <label for="password" class="col-md-4 control-label">Mot de passe</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">

                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <!-- ERROR -->
                                    @if( $errors->has( 'password' ) )

                                        <span class="help-block">
                                            <strong>{{ $errors->first( 'password' ) }}</strong>
                                        </span>

                                    @endif
                                    <!-- End ... ERROR -->

                                </div>
                                <!-- End ... COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                            <!-- FORM GROUP -->
                            <div class="form-group{{ $errors->has( 'password_confirmation' ) ? ' has-error' : '' }}">

                                <label for="password-confirm" class="col-md-4 control-label">Confirmez le mot de passe</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    <!-- ERROR -->
                                    @if( $errors->has( 'password_confirmation' ) )

                                        <span class="help-block">
                                            <strong>{{ $errors->first( 'password_confirmation' ) }}</strong>
                                        </span>

                                    @endif
                                    <!-- End ... ERROR -->

                                </div>
                                <!-- End ... COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                            <!-- FORM GROUP -->
                            <div class="form-group">

                                <!-- COL MD 6 -->
                                <div class="col-md-6 col-md-offset-4">

                                    <!-- SUBMIT -->
                                    <button type="submit" class="btn btn-primary">
                                        Réinisialisation
                                    </button>
                                    <!-- End ... SUBMIT -->

                                </div>
                                <!-- End ...COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                        </form>
                        <!-- End ... FORM -->

                    </div>
                    <!-- End ... PANEL BODY -->

                </div>
                <!-- End ... PANEL -->

            </div>
            <!-- End ... COL MD 8 -->

        </div>
        <!-- End ... ROW -->

    </div>
    <!-- End ... CONTAINER -->

@stop
