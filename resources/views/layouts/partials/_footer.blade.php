        <!-- FOOTER -->
        <footer>

            <!-- ROW -->
            <div class="row js--section-footer">

                <!-- COL SM 6 -->
                <div class="col-sm-6">

                    <ul class="footer-nav">

                        <li>
                            <a href="#">{!! trans( 'webpage-text.footer-link-1' ) !!}</a>
                        </li>

                        <li>
                            <a href="#">{!! trans( 'webpage-text.footer-link-2' ) !!}</a>
                        </li>

                        @if( Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin' )

                            <li>
                                <a href="{{ route( 'administration' ) }}">{!! trans( 'webpage-text.footer-link-3' ) !!}</a>
                            </li>

                        @endif

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
                    {!! trans( 'webpage-text.footer-copyright' ) !!}
                </p>

            </div>
            <!-- End .... ROW -->

        </footer>
        <!-- End ... FOOTER -->

    </div>
    <!-- End ... CONTAINER FLUID -->

</div>
<!-- End ... APP -->

<!--[if lte IE 8]>
    <script src="{{ asset( 'js/ie/respond.min.js' ) }}"></script>
<![endif]-->

<script src="{{ asset( 'js/all.js' ) }}"></script>
<script src="{{ asset( 'js/custom.js' ) }}"></script>
