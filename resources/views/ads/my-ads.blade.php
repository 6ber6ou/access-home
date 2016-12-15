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

        <!-- ROW -->
        <div class="row">

            @include( 'layouts.partials._card' )

        </div>
        <!-- End ...ROW -->

@stop
