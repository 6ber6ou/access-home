<!DOCTYPE html>
<html lang="{!! trans( 'webpage-text.language' ) !!}">

    @include( 'layouts.partials._head' )

    <body>

        <!-- APP -->
        <div id="app">

            <!-- CONTAINER FLUID -->
            <div class="container-fluid">

                <!-- HEADER -->
                <header class="small-navigation">

                    <!-- NAV -->
                    <nav>

                        <!-- ROW -->
                        <div class="row">

                            <!-- LOGO -->
                            <a href="{{ route( 'welcome' ) }}">
                                <img src="{{ asset( 'img/logo-black.png' ) }}" class="logo-black" alt="Access Home logo">
                                <span class="logo-text">
                                    Access <span>Houses</span>
                                </span>
                            </a>
                            <!-- End ... LOGO -->

                            <!-- MAIN NAV -->
                            <ul class="main-nav js--main-nav">

                                <li>
                                    <a href="{{ url( '/#contact' ) }}">{!! trans( 'webpage-text.register-top-link-1' ) !!}</a>
                                </li>

                                <li>
                                    <a href="#">{!! trans( 'webpage-text.register-top-link-2' ) !!}</a>
                                </li>

                                <li>

                                    <?php

                                    if( is_null( app()->getLocale() ) )
                                        {

                                        $locale = 'fr';

                                        }
                                    else
                                        {

                                        $locale = app()->getLocale();

                                        }

                                    ?>

                                    <a href="#" class="js--scroll-to-footer"><img src="{{ asset( 'img/flags/icon-flag-' . $locale . '.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-' . $locale ) !!}"></a>
                                </li>

                            </ul>
                            <!-- End ... MAIN NAV -->

                            <!-- MOBILE NAV -->
                            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                            <!-- End ... MOBILE NAV -->

                        </div>
                        <!-- End ... ROW -->

                    </nav>
                    <!-- NAV -->

                </header>
                <!-- End ... HEADER -->

                @yield( 'content' )

        @include( 'layouts.partials._footer' )

    </body>

</html>
