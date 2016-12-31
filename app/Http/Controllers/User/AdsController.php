<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Ad;
use AH\Country;
use AH\Http\Requests\CreateAdRequest;
use Cookie;
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

        $ad = new Ad();
        $ad->primary_photo = session()->get( 'primary_photo' );
        $ad->title = $request->input( 'title' );
        $ad->subtitle = $request->input( 'subtitle' );
        $ad->description = $request->input( 'description' );
        $ad->country = $request->input( 'country' );
        $ad->city = $request->input( 'city' );
        $ad->zip = $request->input( 'zip' );
        $ad->address = $request->input( 'address' );
        $ad->ramp = boolval( $request->input( 'ramp' ) );
        $ad->lift = boolval( $request->input( 'lift' ) );
        $ad->parking = boolval( $request->input( 'parking' ) );
        $ad->garden = boolval( $request->input( 'garden' ) );
        $ad->bedroom = boolval( $request->input( 'bedroom' ) );
        $ad->circulation = boolval( $request->input( 'circulation' ) );
        $ad->kitchen_acessible = boolval( $request->input( 'kitchen_acessible' ) );
        $ad->bathroom_acessible = boolval( $request->input( 'bathroom_acessible' ) );
        $ad->shower_1 = boolval( $request->input( 'shower_1' ) );
        $ad->shower_2 = boolval( $request->input( 'shower_2' ) );
        $ad->wc = boolval( $request->input( 'wc' ) );
        $ad->transports = boolval( $request->input( 'transports' ) );
        $ad->tv = boolval( $request->input( 'tv' ) );
        $ad->home_cinema = boolval( $request->input( 'home_cinema' ) );
        $ad->computer = boolval( $request->input( 'computer' ) );
        $ad->internet = boolval( $request->input( 'internet' ) );
        $ad->wifi = boolval( $request->input( 'wifi' ) );
        $ad->phone = boolval( $request->input( 'phone' ) );
        $ad->dishwasher = boolval( $request->input( 'dishwasher' ) );
        $ad->washing_machine = boolval( $request->input( 'washing_machine' ) );
        $ad->dryer = boolval( $request->input( 'dryer' ) );
        $ad->oven = boolval( $request->input( 'oven' ) );
        $ad->fridge = boolval( $request->input( 'fridge' ) );
        $ad->freezer = boolval( $request->input( 'freezer' ) );
        $ad->microwave = boolval( $request->input( 'microwave' ) );
        $ad->coffee_machine = boolval( $request->input( 'coffee_machine' ) );
        $ad->livingroom = $request->input( 'livingroom' );
        $ad->dining_room = $request->input( 'dining_room' );
        $ad->kitchen = $request->input( 'kitchen' );
        $ad->kitchenette = $request->input( 'kitchenette' );
        $ad->bathroom = $request->input( 'bathroom' );
        $ad->separed_wc = $request->input( 'separed_wc' );
        $ad->garage = $request->input( 'garage' );
        $ad->cave = $request->input( 'cave' );
        $ad->double_bedroom = $request->input( 'double_bedroom' );
        $ad->simple_bedroom = $request->input( 'simple_bedroom' );
        $ad->nb_double_bed = $request->input( 'nb_double_bed' );
        $ad->nb_simple_bed = $request->input( 'nb_simple_bed' );
        $ad->nb_baby_bed = $request->input( 'nb_baby_bed' );
        $ad->nb_sofa_bed = $request->input( 'nb_sofa_bed' );
        $ad->housing_area = $request->input( 'housing_area' );
        $ad->photo_1 = session()->get( 'photo_1' );
        $ad->photo_2 = session()->get( 'photo_2' );
        $ad->photo_3 = session()->get( 'photo_3' );
        $ad->photo_4 = session()->get( 'photo_4' );
        $ad->photo_5 = session()->get( 'photo_5' );
        $ad->photo_6 = session()->get( 'photo_6' );
        $ad->user_id = Sentinel::getUser()->id;
        $ad->save();

        if( session()->has( 'primary_photo' ) ) session()->forget( 'primary_photo' );
        if( session()->has( 'photo_1' ) ) session()->forget( 'photo_1' );
        if( session()->has( 'photo_2' ) ) session()->forget( 'photo_2' );
        if( session()->has( 'photo_3' ) ) session()->forget( 'photo_3' );
        if( session()->has( 'photo_4' ) ) session()->forget( 'photo_4' );
        if( session()->has( 'photo_5' ) ) session()->forget( 'photo_5' );
        if( session()->has( 'photo_6' ) ) session()->forget( 'photo_6' );

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-created-notification' ) );

        return redirect()
                    ->route( 'my-ads' )
                    ->withCookie( Cookie::forget( 'create_ad_title' ) )
                    ->withCookie( Cookie::forget( 'create_ad_subtitle' ) )
                    ->withCookie( Cookie::forget( 'create_ad_description' ) )
                    ->withCookie( Cookie::forget( 'create_ad_country' ) )
                    ->withCookie( Cookie::forget( 'create_ad_city' ) )
                    ->withCookie( Cookie::forget( 'create_ad_zip' ) )
                    ->withCookie( Cookie::forget( 'create_ad_address' ) )
                    ->withCookie( Cookie::forget( 'create_ad_ramp' ) )
                    ->withCookie( Cookie::forget( 'create_ad_lift' ) )
                    ->withCookie( Cookie::forget( 'create_ad_parking' ) )
                    ->withCookie( Cookie::forget( 'create_ad_garden' ) )
                    ->withCookie( Cookie::forget( 'create_ad_bedroom' ) )
                    ->withCookie( Cookie::forget( 'create_ad_circulation' ) )
                    ->withCookie( Cookie::forget( 'create_ad_kitchen_acessible' ) )
                    ->withCookie( Cookie::forget( 'create_ad_bathroom_acessible' ) )
                    ->withCookie( Cookie::forget( 'create_ad_shower_1' ) )
                    ->withCookie( Cookie::forget( 'create_ad_shower_2' ) )
                    ->withCookie( Cookie::forget( 'create_ad_wc' ) )
                    ->withCookie( Cookie::forget( 'create_ad_transports' ) )
                    ->withCookie( Cookie::forget( 'create_ad_tv' ) )
                    ->withCookie( Cookie::forget( 'create_ad_home_cinema' ) )
                    ->withCookie( Cookie::forget( 'create_ad_computer' ) )
                    ->withCookie( Cookie::forget( 'create_ad_internet' ) )
                    ->withCookie( Cookie::forget( 'create_ad_wifi' ) )
                    ->withCookie( Cookie::forget( 'create_ad_phone' ) )
                    ->withCookie( Cookie::forget( 'create_ad_dishwasher' ) )
                    ->withCookie( Cookie::forget( 'create_ad_washing_machine' ) )
                    ->withCookie( Cookie::forget( 'create_ad_dryer' ) )
                    ->withCookie( Cookie::forget( 'create_ad_oven' ) )
                    ->withCookie( Cookie::forget( 'create_ad_fridge' ) )
                    ->withCookie( Cookie::forget( 'create_ad_freezer' ) )
                    ->withCookie( Cookie::forget( 'create_ad_microwave' ) )
                    ->withCookie( Cookie::forget( 'create_ad_coffee_machine' ) )
                    ->withCookie( Cookie::forget( 'create_ad_livingroom' ) )
                    ->withCookie( Cookie::forget( 'create_ad_dining_room' ) )
                    ->withCookie( Cookie::forget( 'create_ad_kitchen' ) )
                    ->withCookie( Cookie::forget( 'create_ad_kitchenette' ) )
                    ->withCookie( Cookie::forget( 'create_ad_bathroom' ) )
                    ->withCookie( Cookie::forget( 'create_ad_separed_wc' ) )
                    ->withCookie( Cookie::forget( 'create_ad_garage' ) )
                    ->withCookie( Cookie::forget( 'create_ad_cave' ) )
                    ->withCookie( Cookie::forget( 'create_ad_double_bedroom' ) )
                    ->withCookie( Cookie::forget( 'create_ad_simple_bedroom' ) )
                    ->withCookie( Cookie::forget( 'create_ad_nb_double_bed' ) )
                    ->withCookie( Cookie::forget( 'create_ad_nb_simple_bed' ) )
                    ->withCookie( Cookie::forget( 'create_ad_nb_baby_bed' ) )
                    ->withCookie( Cookie::forget( 'create_ad_nb_sofa_bed' ) )
                    ->withCookie( Cookie::forget( 'create_ad_housing_area' ) );

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
        $ads = Ad::where( 'user_id', Sentinel::getUser()->id )->orderBy( 'id', 'desc' )->get();

        return view( 'ads.my-ads', compact( 'page', 'ads' ) );

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

    // ------------------------------------------------------------

    public function delete_ad( $id )
        {

        $ad = Ad::where( 'user_id', Sentinel::getUser()->id )->where( 'id', $id )->first();

        $this->remove_photos( $ad );

        $ad->delete();

        session()->flash( 'message', 'success|' . trans( 'webpage-text.ad-deleted-notification' ) );

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

    // ============================================================

    private function remove_photos( $ad )
        {

        @unlink( $ad->primary_photo );
        @unlink( $ad->photo_1 );
        @unlink( $ad->photo_2 );
        @unlink( $ad->photo_3 );
        @unlink( $ad->photo_4 );
        @unlink( $ad->photo_5 );
        @unlink( $ad->photo_6 );

        @unlink( str_replace( 'thumbs/', '', $ad->primary_photo ) );
        @unlink( str_replace( 'thumbs/', '', $ad->photo_1 ) );
        @unlink( str_replace( 'thumbs/', '', $ad->photo_2 ) );
        @unlink( str_replace( 'thumbs/', '', $ad->photo_3 ) );
        @unlink( str_replace( 'thumbs/', '', $ad->photo_4 ) );
        @unlink( str_replace( 'thumbs/', '', $ad->photo_5 ) );
        @unlink( str_replace( 'thumbs/', '', $ad->photo_6 ) );

        }

    }
