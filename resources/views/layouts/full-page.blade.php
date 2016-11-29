<!DOCTYPE html>
<html lang="{!! trans( 'webpage-text.language' ) !!}">

    @include( 'layouts.partials._head' )

    <body>

        <!-- APP -->
        <div id="app">

            <!-- CONTAINER FLUID -->
            <div class="container-fluid">

                <!-- PAGE WRAPPER -->
                <div class="page-wrapper">

                    @include( 'layouts.partials._header' )

                    @yield( 'content' )

                </div>
                <!-- End ... PAGE WRAPPER -->

        @include( 'layouts.partials._footer' )

    </body>

</html>
