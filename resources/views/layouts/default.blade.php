<!DOCTYPE html>
<html lang="en">

    @include( 'layouts.partials._head' )

    <body>

        <!-- APP -->
        <div id="app">

            <!-- NAVBAR -->
            <nav class="navbar navbar-default navbar-static-top">

                <!-- CONTAINER -->
                <div class="container">

                    <!-- NAV HEADER -->
                    <div class="navbar-header">

                        <!-- HAMBURGER MENU -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- End ... HAMBURGER MENU -->

                        <!-- LOGO -->
                        <a class="navbar-brand" href="{{ url( '/' ) }}">
                            {{ config('app.name', 'Access Home') }}
                        </a>
                        <!-- End ... LOGO -->

                    </div>
                    <!-- End ... NAV HEADER -->

                    <!-- COLLAPSE NAVBAR -->
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        <!-- Left Side Of Navbar -->
{{--                         <ul class="nav navbar-nav">
                            &nbsp;
                        </ul> --}}

                        <!-- RIGHT NAVBAR -->
                        <ul class="nav navbar-nav navbar-right">

                            @if( Auth::guest() )

                                <!-- AUTHENTICATION LINKS -->
                                <li>
                                    <a href="{{ url( '/login' ) }}">Connexion</a>
                                </li>

                                <li>
                                    <a href="{{ url('/register') }}">Inscription</a>
                                </li>
                                <!-- End ... AUTHENTICATION LINKS -->

                            @else

                                <!-- USER MENU -->
                                <li class="dropdown">

                                    <!-- USER -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <!-- End ... USER -->

                                    <!-- DROPDOWN MENU -->
                                    <ul class="dropdown-menu" role="menu">

                                        <!-- LOGOUT -->
                                        <li>

                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </li>
                                        <!-- End ... LOGOUT -->

                                    </ul>
                                    <!-- End ... DROPDOWN MENU -->

                                </li>
                                <!-- End ... USER MENU -->

                            @endif

                        </ul>
                        <!-- End ... RIGHT NAVBAR -->

                    </div>
                    <!-- End ... COLLAPSE NAVBAR -->

                </div>
                <!-- End ... CONTAINER -->

            </nav>
            <!-- End ... NAVBAR -->

            @yield('content')

        </div>
        <!-- End ... APP -->

        @include( 'layouts.partials._footer' )

    </body>

</html>
