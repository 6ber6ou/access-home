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
                        Inscription
                    </div>
                    <!-- End ... PANEL HEADING -->

                    <!-- PANEL BODY -->
                    <div class="panel-body">

                        <!-- FORM -->
                        <form class="form-horizontal" role="form" method="POST" action="{{ url( '/register' ) }}">

                            {{ csrf_field() }}

                            <!-- FORM GROUP -->
                            <div class="form-group{{ $errors->has( 'name' ) ? ' has-error' : '' }}">

                                <label for="name" class="col-md-4 control-label">Nom</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">

                                    <input id="name" type="text" class="form-control" name="name" value="{{ old( 'name' ) }}" required autofocus>

                                    <!-- ERROR -->
                                    @if( $errors->has( 'name' ) )

                                        <span class="help-block">
                                            <strong>{{ $errors->first( 'name' ) }}</strong>
                                        </span>

                                    @endif
                                    <!-- End ... ERROR -->

                                </div>
                                <!-- End ... COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                            <!-- FORM GROUP -->
                            <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">

                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old( 'email' ) }}" required>

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
                                <!-- COL MD 6 -->

                            </div>
                            <!-- End ... FORM GROUP -->

                            <!-- FORM GROUP -->
                            <div class="form-group">

                                <label for="password-confirm" class="col-md-4 control-label">Confirmez le mot de passe</label>

                                <!-- COL MD 6 -->
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
                                        Enregistrer
                                    </button>
                                    <!-- End ... SUBMIT -->

                                </div>
                                <!-- End ... COL MD 6 -->

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
