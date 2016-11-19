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
                        Réinitialiser votre mot de passe
                    </div>
                    <!-- End ... PANEL HEADING -->

                    <!-- PANEL BODY -->
                    <div class="panel-body">

                        <!-- ALERT MESSAGE -->
                        @if( session( 'status' ) )

                            <div class="alert alert-success">
                                {{ session( 'status' ) }}
                            </div>

                        @endif
                        <!-- End ... ALERT MESSAGE -->

                        <!-- FORM -->
                        <form class="form-horizontal" role="form" method="POST" action="{{ url( '/password/email' ) }}">

                            {{ csrf_field() }}

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
                            <div class="form-group">

                                <!-- COL MD 6 -->
                                <div class="col-md-6 col-md-offset-4">

                                    <!-- SUBMIT -->
                                    <button type="submit" class="btn btn-primary">
                                        Envoyer un lien pour réinitialiser votre mot de passe
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
