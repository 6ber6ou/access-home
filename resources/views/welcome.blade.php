<!DOCTYPE html>
<html lang="{!! trans( 'webpage-text.language' ) !!}">

    @include( 'layouts.partials._head' )

    <body>

        <!-- APP -->
        <div id="app">

            <!-- CONTAINER FLUID -->
            <div class="container-fluid">

                <!-- HEADER -->
                <header>

                    <!-- NAV -->
                    <nav>

                        <!-- ROW -->
                        <div class="row">

                            <!-- LOGO -->
                            <a href="#">
                                <img src="{{ asset( 'img/logo-white.png' ) }}" class="logo" alt="Access Home logo">
                                <img src="{{ asset( 'img/logo-black.png' ) }}" class="logo-black" alt="Access Home logo">
                                <span class="logo-text">
                                    Access <span>Houses</span>
                                </span>
                            </a>
                            <!-- End ... LOGO -->

                            <!-- MAIN NAV -->
                            <ul class="main-nav js--main-nav">

                                <li>
                                    <a href="#" class="js--scroll-to-start">{!! trans( 'webpage-text.homepage-top-link-1' ) !!}</a>
                                </li>

                                <li class="three-steps">
                                    <a href="#" class="js--scroll-to-how-it-works">{!! trans( 'webpage-text.homepage-top-link-2' ) !!}</a>
                                </li>

                                <li>
                                    <a href="#" class="js--scroll-to-cities">{!! trans( 'webpage-text.homepage-top-link-3' ) !!}</a>
                                </li>

                                <li>
                                    <a href="#" class="js--scroll-to-testimonials">{!! trans( 'webpage-text.homepage-top-link-4' ) !!}</a>
                                </li>

                                <li>
                                    <a href="#" class="js--scroll-to-contact">{!! trans( 'webpage-text.homepage-top-link-5' ) !!}</a>
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

                    <!-- HERO TEXT BOX -->
                    <div class="hero-text-box">

                        <!-- ROW -->
                        <div class="row">

                            <h1>
                                {!! trans( 'webpage-text.homepage-h1' ) !!}
                            </h1>

                            <a href="#" class="btn btn-full">{!! trans( 'webpage-text.homepage-btn-1' ) !!}</a>
                            <a href="#" class="btn btn-ghost">{!! trans( 'webpage-text.homepage-btn-2' ) !!}</a>

                       </div>
                        <!-- End ... ROW -->

                    </div>
                    <!-- End ... HERO TEXT BOX -->

                </header>
                <!-- End ... HEADER -->

                <!-- ============================================================ -->

                <!-- SECTION -->
                <section class="section-features js--section-features">

                    <!-- ROW -->
                    <div class="row">

                        <h2>
                            {!! trans( 'webpage-text.homepage-features-h2' ) !!}
                        </h2>

                        <p class="long-copy">
                            {!! trans( 'webpage-text.homepage-features-p' ) !!}
                        </p>

                    </div>
                    <!-- End ...ROW -->

                    <!-- ROW -->
                    <div class="row js--wp-1">

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <i class="ion-ios-world-outline icon-big"></i>

                            <h3>
                                {!! trans( 'webpage-text.homepage-features-h3-1' ) !!}
                            </h3>

                            <p>
                                 {!! trans( 'webpage-text.homepage-features-p-1' ) !!}
                            </p>

                        </div>
                        <!-- End ... COL MD 3 -->

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <i class="ion-ios-home-outline icon-big"></i>

                            <h3>
                                {!! trans( 'webpage-text.homepage-features-h3-2' ) !!}
                            </h3>

                            <p>
                                 {!! trans( 'webpage-text.homepage-features-p-2' ) !!}
                            </p>

                        </div>
                        <!-- End ... COL MD 3 -->

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <i class="ion-ios-pulse icon-big"></i>

                            <h3>
                                {!! trans( 'webpage-text.homepage-features-h3-3' ) !!}
                            </h3>

                            <p>
                                 {!! trans( 'webpage-text.homepage-features-p-3' ) !!}
                            </p>

                        </div>
                        <!-- End ... COL MD 3 -->

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <i class="ion-ios-cart-outline icon-big"></i>

                            <h3>
                                {!! trans( 'webpage-text.homepage-features-h3-4' ) !!}
                            </h3>

                            <p>
                                 {!! trans( 'webpage-text.homepage-features-p-4' ) !!}
                            </p>

                        </div>
                        <!-- End ... COL MD 3 -->

                    </div>
                    <!-- End ...ROW -->

                </section>
                <!-- End ... SECTION -->

                <!-- ============================================================ -->

                <!-- SECTION -->
                <section class="section-photos">

                    <!-- PHOTOS SHOWCASE LINE 1 -->
                    <ul class="photos-showcase clearfix">

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-01.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-02.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-03.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-04.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                    </ul>
                    <!-- End ... PHOTOS SHOWCASE LINE 1 -->

                    <!-- PHOTOS SHOWCASE LINE 2 -->
                    <ul class="photos-showcase photos-showcase-second-row clearfix">

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-05.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-06.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-07.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                        <li>

                            <figure class="photo">
                                <img src="{{ asset( '/img/image-08.jpg' ) }}" alt="{{ trans( 'webpage-text.homepage-alt-showcase' ) }}">
                            </figure>

                        </li>

                    </ul>
                    <!-- End ... PHOTOS SHOWCASE LINE 2 -->

                </section>
                <!-- End ... SECTION -->

                <!-- ============================================================ -->

                <!-- SECTION -->
                <section class="section-steps js--section-how-it-works">

                    <!-- ROW -->
                    <div class="row">

                        <h2>
                            {!! trans( 'webpage-text.homepage-steps-h2' ) !!}
                        </h2>

                    </div>
                    <!-- End ... ROW -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- COL MD 6 -->
                        <div class="col-md-6 steps-box">

                            <!-- LAYOUT IMAGE -->
                            <img src="{{ asset( 'img/plan-pmr.png' ) }}" class="img-responsive layout-image js--wp-2" alt="{!! trans( 'webpage-text.homepage-alt-how-it-works' ) !!}">
                            <!-- End ... LAYOUT IMAGE -->

                        </div>
                        <!-- End ... COL MD 6 -->

                        <!-- COL MD 6 -->
                        <div class="col-md-6 steps-box">

                            <!-- WORKS STEP 1 -->

                            <!-- WORKS STEPS CONTAINER -->
                            <div class="works-step-container">

                                <div class="works-step">

                                    <div>
                                        1
                                    </div>

                                    <p>
                                        {!! trans( 'webpage-text.homepage-alt-how-it-works-step-1' ) !!}
                                    </p>

                                </div>
                                <!-- End ... WORKS STEP 1 -->

                                <!-- WORKS STEP 2 -->
                                <div class="works-step">

                                    <div>
                                        2
                                    </div>

                                    <p>
                                        {!! trans( 'webpage-text.homepage-alt-how-it-works-step-2' ) !!}
                                    </p>

                                </div>
                                <!-- End ... WORKS STEP 2 -->

                                <!-- WORKS STEP 3 -->
                                <div class="works-step">

                                    <div>
                                        3
                                    </div>

                                    <p>
                                        {!! trans( 'webpage-text.homepage-alt-how-it-works-step-3' ) !!}
                                    </p>

                                </div>
                                <!-- End ... WORKS STEP 3 -->

                            </div>
                            <!-- End ... WORKS STEPS CONTAINER -->

                        </div>
                        <!-- End ... COL MD 6 -->

                    </div>
                    <!-- End ... ROW -->

                </section>
                <!-- End ... SECTION -->

                <!-- ============================================================ -->

                <!-- SECTION -->
                <section class="section-cities js--section-cities">

                    <!-- ROW -->
                    <div class="row">

                        <h2>
                            {!! trans( 'webpage-text.homepage-cities-h2' ) !!}
                        </h2>

                    </div>
                    <!-- End ... ROW -->

                    <!-- ROW -->
                    <div class="row js--wp-3">

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <img src="{{ asset( 'img/paris.jpg' ) }}" class="cities-photo" alt="{!! trans( 'webpage-text.homepage-cities-alt-1' ) !!}">

                            <h3>
                                {!! trans( 'webpage-text.homepage-cities-h3-1' ) !!}
                            </h3>

                            <div class="city-feature">

                                <i class="ion-ios-person icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-1' ) !!}

                            </div>

                            <div class="city-feature">

                                <i class="ion-ios-home icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-2' ) !!}

                            </div>

{{--                             <div class="city-feature">

                                <i class="ion-social-twitter icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-3-1' ) !!}

                            </div> --}}

                        </div>
                        <!-- COL MD 3 -->

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <img src="{{ asset( 'img/san-francisco.jpg' ) }}" class="cities-photo" alt="{!! trans( 'webpage-text.homepage-cities-alt-2' ) !!}">

                            <h3>
                                {!! trans( 'webpage-text.homepage-cities-h3-2' ) !!}
                            </h3>

                            <div class="city-feature">

                                <i class="ion-ios-person icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-1' ) !!}

                            </div>

                            <div class="city-feature">

                                <i class="ion-ios-home icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-2' ) !!}

                            </div>

 {{--                            <div class="city-feature">

                                <i class="ion-social-twitter icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-3-2' ) !!}

                            </div>
 --}}
                        </div>
                        <!-- COL MD 3 -->

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <img src="{{ asset( 'img/berlin.jpg' ) }}" class="cities-photo" alt="{!! trans( 'webpage-text.homepage-cities-alt-3' ) !!}">

                            <h3>
                                {!! trans( 'webpage-text.homepage-cities-h3-3' ) !!}
                            </h3>

                            <div class="city-feature">

                                <i class="ion-ios-person icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-1' ) !!}

                            </div>

                            <div class="city-feature">

                                <i class="ion-ios-home icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-2' ) !!}

                            </div>

{{--                             <div class="city-feature">

                                <i class="ion-social-twitter icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-3-3' ) !!}

                            </div> --}}

                        </div>
                        <!-- COL MD 3 -->

                        <!-- COL MD 3 -->
                        <div class="col-md-3 box">

                            <img src="{{ asset( 'img/london.jpg' ) }}" class="cities-photo" alt="{!! trans( 'webpage-text.homepage-cities-alt-4' ) !!}">

                            <h3>
                                {!! trans( 'webpage-text.homepage-cities-h3-4' ) !!}
                            </h3>

                            <div class="city-feature">

                                <i class="ion-ios-person icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-1' ) !!}

                            </div>

                            <div class="city-feature">

                                <i class="ion-ios-home icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-2' ) !!}

                            </div>

{{--                             <div class="city-feature">

                                <i class="ion-social-twitter icon-small"></i>
                                {!! trans( 'webpage-text.homepage-cities-text-3-4' ) !!}

                            </div> --}}

                        </div>
                        <!-- COL MD 3 -->

                    </div>
                    <!-- End ... ROW -->

                </section>
                <!-- End ... SECTION -->

                <!-- ============================================================ -->

                <!-- SECTION -->
                <section class="section-testimonials js--section-testimonials">

                    <!-- ROW -->
                    <div class="row">

                        <h2>
                            {!! trans( 'webpage-text.homepage-testimonials-h2' ) !!}
                        </h2>

                    </div>
                    <!-- End ... ROW -->

                    <!-- ROW -->
                    <div class="row">

                        <!-- COL MD 4 -->
                        <div class="col-md-4">

                            <blockquote>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laboriosam aspernatur ad iure vel expedita rem et, eligendi sunt distinctio, culpa optio soluta sit neque exercitationem nobis voluptatem, maxime nemo.

                                <cite>
                                    <img src="{{ asset( 'img/users/user-1.jpg' ) }}" alt="{!! trans( 'webpage-text.homepage-testimonials-img-alt' ) !!}">Alberto Duncan
                                </cite>

                            </blockquote>

                        </div>
                        <!-- End ... COL MD 4 -->

                        <!-- COL MD 4 -->
                        <div class="col-md-4">

                            <blockquote>

                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio dolores quia a nihil eos, incidunt velit porro itaque tempore sed. Corporis maxime explicabo, iure, eius ullam id dicta nihil est!

                                <cite>
                                    <img src="{{ asset( 'img/users/user-2.jpg' ) }}" alt="{!! trans( 'webpage-text.homepage-testimonials-img-alt' ) !!}">Joana Silva
                                </cite>

                            </blockquote>

                        </div>
                        <!-- End ... COL MD 4 -->

                        <!-- COL MD 4 -->
                        <div class="col-md-4">

                            <blockquote>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eligendi inventore iusto cupiditate maxime laborum debitis voluptatem, modi laudantium eum blanditiis at distinctio quod aliquid assumenda saepe doloribus suscipit molestias.

                                <cite>
                                    <img src="{{ asset( 'img/users/user-3.jpg' ) }}" alt="{!! trans( 'webpage-text.homepage-testimonials-img-alt' ) !!}">Milton Chapman
                                </cite>

                            </blockquote>

                        </div>
                        <!-- End ... COL MD 4 -->

                    </div>
                    <!-- End ... ROW -->

                </section>
                <!-- End ... SECTION -->

                <!-- ============================================================ -->

                <!-- SECTION -->
                <section class="section-contact js--section-contact">

                    <!-- ROW -->
                    <div class="row">

                        <h2>
                            {!! trans( 'webpage-text.homepage-contact-h2' ) !!}
                        </h2>

                    </div>
                    <!-- End ... ROW -->

                    <!-- ROW -->
                    <div class="row js--wp-4">

                        {!! Form::open( [ 'route' => 'post-contact', 'class' => 'contact-form' ] ) !!}

                            <!-- ROW -->
                            <div class="row">

                                <!-- FORM GROUP -->
                                <div class="form-group">

                                    <!-- COL MD 6 -->
                                    <div class="col-md-6 col-md-offset-3">
                                        {!! Form::text( 'name', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.homepage-contact-placeholder-1' ), 'required' ] ) !!}
                                    </div>
                                    <!-- COL MD 6 -->

                                </div>
                                <!-- End ... FORM GROUP -->

                            </div>
                            <!-- End ... ROW -->

                            <!-- ROW -->
                            <div class="row">

                                <!-- FORM GROUP -->
                                <div class="form-group">

                                    <!-- COL MD 6 -->
                                    <div class="col-md-6 col-md-offset-3">
                                        {!! Form::email( 'email', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.homepage-contact-placeholder-2' ), 'required' ] ) !!}
                                    </div>
                                    <!-- COL MD 6 -->

                                </div>
                                <!-- End ... FORM GROUP -->

                            </div>
                            <!-- End ... ROW -->

                            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - -->
                            <!-- ANTI SPAM FIELD -->
                            <!-- - - - - - - - - -->

                            <!-- ROW -->
                            <div class="row address_field">

                                <!-- FORM GROUP -->
                                <div class="form-group">

                                    <!-- COL MD 6 -->
                                    <div class="col-md-6 col-md-offset-3">
                                        {!! Form::text( 'address', NULL, [ 'class' => 'form-control address_input', 'placeholder' => trans( 'webpage-text.homepage-contact-placeholder-4' ), 'required' ] ) !!}
                                    </div>
                                    <!-- COL MD 6 -->

                                </div>
                                <!-- End ... FORM GROUP -->

                            </div>
                            <!-- End ... ROW -->

                            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

                            <!-- ROW -->
                            <div class="row">

                                <!-- FORM GROUP -->
                                <div class="form-group">

                                    <!-- COL MD 6 -->
                                    <div class="col-md-6 col-md-offset-3">
                                        {!! Form::textarea( 'body', NULL, [ 'class' => 'form-control', 'placeholder' => trans( 'webpage-text.homepage-contact-placeholder-3' ), 'required' ] ) !!}
                                    </div>
                                    <!-- COL MD 6 -->

                                </div>
                                <!-- End ... FORM GROUP -->

                            </div>
                            <!-- End ... ROW -->

                            <!-- ROW -->
                            <div class="row">

                                <!-- FORM GROUP -->
                                <div class="form-group">

                                    <!-- COL MD 6 -->
                                    <div class="col-md-6 col-md-offset-3">
                                        {!! Form::submit( trans( 'webpage-text.homepage-contact-submit' ), [ 'class' => 'btn btn-full' ] ) !!}
                                    </div>
                                    <!-- COL MD 6 -->

                                </div>
                                <!-- End ... FORM GROUP -->

                            </div>
                            <!-- End ... ROW -->

                        {!! Form::close() !!}

                    </div>
                    <!-- End ... ROW -->

                </section>
                <!-- End ... SECTION -->

                <!-- FOOTER -->
                <footer>

                    <!-- ROW -->
                    <div class="row js--section-footer">

                        <!-- COL SM 6 -->
                        <div class="col-sm-6">

                            <ul class="footer-nav">

                                <li>
                                    <a href="#">{!! trans( 'webpage-text.homepage-footer-link-1' ) !!}</a>
                                </li>

                                <li>
                                    <a href="#">{!! trans( 'webpage-text.homepage-footer-link-2' ) !!}</a>
                                </li>

                            </ul>

                        </div>
                        <!-- End ... COL SM 6 -->

                        <!-- COL SM 6 -->
                        <div class="col-sm-6">

                            <ul class="footer-social-links">

                                <li>
                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="ion-social-googleplus"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>

                            </ul>

                        </div>
                        <!-- End ... COL SM 6 -->

                    </div>
                    <!-- End .... ROW -->

                    <!-- ROW -->
                    <div class="row">

                        <ul class="footer-flags">

                            <li>

                                <form action="{{ route( 'language-chooser' ) }}" method="POST">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="locale" id="locale" value="fr">

                                    <button type="submit">
                                        <img src="{{ asset( 'img/flags/icon-flag-fr.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-fr' ) !!}">
                                    </button>

                                </form>

                            </li>

                            <li>

                                <form action="{{ route( 'language-chooser' ) }}" method="POST">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="locale" id="locale" value="en">

                                    <button type="submit">
                                        <img src="{{ asset( 'img/flags/icon-flag-en.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-en' ) !!}">
                                    </button>

                                </form>

                            </li>

                            <li>

                                <form action="{{ route( 'language-chooser' ) }}" method="POST">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="locale" id="locale" value="es">

                                    <button type="submit">
                                        <img src="{{ asset( 'img/flags/icon-flag-es.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-es' ) !!}">
                                    </button>

                                </form>

                            </li>

                            <li>

                                <form action="{{ route( 'language-chooser' ) }}" method="POST">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="locale" id="locale" value="de">

                                    <button type="submit">
                                        <img src="{{ asset( 'img/flags/icon-flag-de.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-de' ) !!}">
                                    </button>

                                </form>

                            </li>

                            <li>

                                <form action="{{ route( 'language-chooser' ) }}" method="POST">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="locale" id="locale" value="it">

                                    <button type="submit">
                                        <img src="{{ asset( 'img/flags/icon-flag-it.png' ) }}" alt="{!! trans( 'webpage-text.homepage-alt-flag-it' ) !!}">
                                    </button>

                                </form>

                            </li>

                        </ul>

                    </div>
                    <!-- End .... ROW -->

                    <!-- ROW -->
                    <div class="row">

                        <p>
                            {!! trans( 'webpage-text.homepage-footer-copyright' ) !!}
                        </p>

                    </div>
                    <!-- End .... ROW -->

                </footer>
                <!-- End ... FOOTER -->

            </div>
            <!-- End ... CONTAINER FLUID -->

        </div>
        <!-- End ... APP -->

        @include( 'layouts.partials._footer' )

    </body>

</html>
