<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Ad;
use AH\Country;
use AH\Http\Requests\CreateAdRequest;
use Image;
use JavaScript;
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
        $countries = Country::pluck( 'name', 'code' );

        if( ! preg_match( '#ads/create#', $_SERVER[ 'HTTP_REFERER' ] ) )
            {

            $this->remove_sessions();

            }

        return view( 'ads.create', compact( 'page', 'countries' ) );

        }

    // ------------------------------------------------------------

    public function store( CreateAdRequest $request )
        {








        }

    // ------------------------------------------------------------

    public function show( $id )
        {

        show_notification();

        $page = 'show-ads';
        $ad = Ad::where( 'user_id', Sentinel::getUser()->id )->where( 'id', $id )->first();

        JavaScript::put(
            [

            'my_address' => $ad->address . ' ' . $ad->zip . ' ' . $ad->city . ' ' . $ad->country

            ] );

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

    // ------------------------------------------------------------

    public function upload_ad_primary_photo( Request $request )
        {

        if( $request->hasFile( 'ad-primary-photo' ) )
            {

            $primary_photo = $request->file( 'ad-primary-photo' );
            $filename = time() . '.' . $primary_photo->getClientOriginalExtension();

            @unlink( session()->get( 'primary_photo' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'primary_photo' ) ) );

            Image::make( $primary_photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $primary_photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'primary_photo', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_primary_photo( Request $request )
        {

        @unlink( session()->get( 'primary_photo' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'primary_photo' ) ) );

        session()->forget( 'primary_photo' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ------------------------------------------------------------

    public function upload_ad_photo_1( Request $request )
        {

        if( $request->hasFile( 'ad-photo-1' ) )
            {

            $photo = $request->file( 'ad-photo-1' );
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            @unlink( session()->get( 'photo_1' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'photo_1' ) ) );

            Image::make( $photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'photo_1', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_photo_1( Request $request )
        {

        @unlink( session()->get( 'photo_1' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'photo_1' ) ) );

        session()->forget( 'photo_1' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ------------------------------------------------------------

    public function upload_ad_photo_2( Request $request )
        {

        if( $request->hasFile( 'ad-photo-2' ) )
            {

            $photo = $request->file( 'ad-photo-2' );
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            @unlink( session()->get( 'photo_2' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'photo_2' ) ) );

            Image::make( $photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'photo_2', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_photo_2( Request $request )
        {

        @unlink( session()->get( 'photo_2' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'photo_2' ) ) );

        session()->forget( 'photo_2' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ------------------------------------------------------------

    public function upload_ad_photo_3( Request $request )
        {

        if( $request->hasFile( 'ad-photo-3' ) )
            {

            $photo = $request->file( 'ad-photo-3' );
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            @unlink( session()->get( 'photo_3' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'photo_3' ) ) );

            Image::make( $photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'photo_3', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_photo_3( Request $request )
        {

        @unlink( session()->get( 'photo_3' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'photo_3' ) ) );

        session()->forget( 'photo_3' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ------------------------------------------------------------

    public function upload_ad_photo_4( Request $request )
        {

        if( $request->hasFile( 'ad-photo-4' ) )
            {

            $photo = $request->file( 'ad-photo-4' );
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            @unlink( session()->get( 'photo_4' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'photo_4' ) ) );

            Image::make( $photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'photo_4', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_photo_4( Request $request )
        {

        @unlink( session()->get( 'photo_4' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'photo_4' ) ) );

        session()->forget( 'photo_4' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ------------------------------------------------------------

    public function upload_ad_photo_5( Request $request )
        {

        if( $request->hasFile( 'ad-photo-5' ) )
            {

            $photo = $request->file( 'ad-photo-5' );
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            @unlink( session()->get( 'photo_5' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'photo_5' ) ) );

            Image::make( $photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'photo_5', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_photo_5( Request $request )
        {

        @unlink( session()->get( 'photo_5' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'photo_5' ) ) );

        session()->forget( 'photo_5' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ------------------------------------------------------------

    public function upload_ad_photo_6( Request $request )
        {

        if( $request->hasFile( 'ad-photo-6' ) )
            {

            $photo = $request->file( 'ad-photo-6' );
            $filename = time() . '.' . $photo->getClientOriginalExtension();

            @unlink( session()->get( 'photo_6' ) );
            @unlink( str_replace( '/thumbs', '', session()->get( 'photo_6' ) ) );

            Image::make( $photo )->widen( 800, function( $constraint )
                {

                $constraint->upsize();

                } )->save( public_path( '/uploads/housing/' ) . $filename );
            Image::make( $photo )->fit( 370, 235 )->save( public_path( '/uploads/housing/thumbs/' ) . $filename );

            session()->put( 'photo_6', 'uploads/housing/thumbs/' . $filename );

            $request->session()->flash( 'message', 'success|' . trans( 'webpage-text.photo-upload-notification' ) );

            }

        }

    // ------------------------------------------------------------

    public function delete_ad_photo_6( Request $request )
        {

        @unlink( session()->get( 'photo_6' ) );
        @unlink( str_replace( 'thumbs/', '', session()->get( 'photo_6' ) ) );

        session()->forget( 'photo_6' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-photo-deleted-notification' ) );

        return redirect()->back();

        }

    // ============================================================

    private function remove_sessions()
        {

        session()->forget( 'primary_photo' );
        session()->forget( 'photo_1' );
        session()->forget( 'photo_2' );
        session()->forget( 'photo_3' );
        session()->forget( 'photo_4' );
        session()->forget( 'photo_5' );
        session()->forget( 'photo_6' );

        }

    }
