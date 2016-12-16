<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Ad;
use Sentinel;

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

        $page = 'ads';

        return view( 'ads.index', compact( 'page' ) );

        }

    // ------------------------------------------------------------

    public function create()
        {

        show_notification();

        $page = 'create-ads';

        return view( 'ads.create', compact( 'page' ) );

        }

    // ------------------------------------------------------------

    public function store( Request $request )
        {
        }

    // ------------------------------------------------------------

    public function show( $id )
        {

        show_notification();

        $page = 'show-ads';
        $ad = Ad::where( 'user_id', Sentinel::getUser()->id )->where( 'id', $id )->first();

        return view( 'ads.show', compact( 'page', 'ad' ) );

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
