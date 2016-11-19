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
                        Connexion
                    </div>
                    <!-- End ... PANEL HEADING -->

                    <!-- PANEL BODY -->
                    <div class="panel-body">

                        <!-- FORM -->
                        <form class="form-horizontal" role="form" method="POST" action="{{ url( '/login' ) }}">

                            {{ csrf_field() }}

                            <!-- FORM GROUP -->
                            <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old( 'email' ) }}" required autofocus>

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
                            <div class="form-group">

                                <!-- COL MD 6 -->
                                <div class="col-md-6 col-md-offset-4">

                                    <!-- CHECKBOX -->
                                    <div class="checkbox">

                                        <label>
                                            <input type="checkbox" name="remember"> Se souvenir de moi
                                        </label>

                                    </div>
                                    <!-- End ... CHECKBOX -->

                                </div>
                                <!-- End ... COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                            <!-- FORM GROUP -->
                            <div class="form-group">

                                <!-- COL MD 8 -->
                                <div class="col-md-8 col-md-offset-4">

                                    <!-- SUBMIT -->
                                    <button type="submit" class="btn btn-primary">
                                        Connexion
                                    </button>
                                    <!-- End ... SUBMIT -->

                                    <!-- FORGOTED PASSWORD -->
                                    <a class="btn btn-link" href="{{ url( '/password/reset' ) }}">
                                        Forgot Your Password?
                                    </a>
                                    <!-- End ... FORGOTED PASSWORD -->

                                </div>
                                <!-- End ... COL MD 8 -->

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
