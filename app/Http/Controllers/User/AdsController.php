<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

class AdsController extends Controller
    {

    public function __construct()
        {

        $this->middleware( 'sentinel.auth', [ 'except' => [ 'index', 'show' ] ] );

        }

    // ------------------------------------------------------------

    public function index()
        {

        show_notification();

        $page = 'adds';

        return view( 'ads.index', compact( 'page' ) );

        }

    // ------------------------------------------------------------

    public function create()
        {

        show_notification();

        $page = 'adds';

        return view( 'ads.create', compact( 'page' ) );

        }

    // ------------------------------------------------------------

    public function store( Request $request )
        {
        }

    // ------------------------------------------------------------

    public function show( $id )
        {
        }

    // ------------------------------------------------------------

    public function edit( $id )
        {
        }

    // ------------------------------------------------------------

    public function update( Request $request, $id )
        {
        }

    // ------------------------------------------------------------

    public function destroy( $id )
        {
        }

    // ------------------------------------------------------------

    public function my_adds()
        {

        show_notification();

        $page = 'my-ads';

        return view( 'ads.my-ads', compact( 'page' ) );

        }

    }
