@extends( 'layouts.default' )

<!-- ============================================================ -->

@section( 'content' )

   <!-- SECTION -->
    <section class="section-my-ads">

        <!-- ROW -->
        <div class="row">

            <h2>
                {!! trans( 'webpage-text.user-my-ads-h2' ) !!}
            </h2>

        </div>
        <!-- End ...ROW -->

        @if( count( $ads ) > 0 )

            @foreach( $ads as $ad)

                <!-- ROW -->
                <div class="row">

                    @include( 'layouts.partials._card' )

                </div>
                <!-- End ...ROW -->

            @endforeach

        @else

            <div class="row">

                <p class="col-md-12 text-center p_error_page">
                    Pas d'annonces !
                </p>

            </div>

        @endif

@stop
