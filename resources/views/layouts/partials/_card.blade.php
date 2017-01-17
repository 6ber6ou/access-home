<!-- COL MD 6 -->
<div class="col-md-6 col-md-offset-3">

    <article class="card">

        <div class="card-thumb">

            <?php

            $photo = '';

            if( $ad->primary_photo != NULL ) $photo = $ad->primary_photo;
            else if( $ad->photo_1 != NULL ) $photo = $ad->photo_1;
            else if( $ad->photo_2 != NULL ) $photo = $ad->photo_2;
            else if( $ad->photo_3 != NULL ) $photo = $ad->photo_3;
            else if( $ad->photo_4 != NULL ) $photo = $ad->photo_4;
            else if( $ad->photo_5 != NULL ) $photo = $ad->photo_5;
            else if( $ad->photo_6 != NULL ) $photo = $ad->photo_6;

            ?>

            <img src="{{ $photo ? asset( $photo ) : asset( 'uploads/housing/thumbs/default.jpg' ) }}" alt="{!! trans( 'webpage-text.card-image-alt' ); !!}">
        </div>

        <div class="card-city">
            {{ $ad->country }}
        </div>

        <div class="card-body">

            <div class="card-location">
                {{ $ad->city }}
            </div>

            <h2 class="card-title">
                {{ $ad->title }}
            </h2>

            <div class="card-subtitle">
                {{ $ad->subtitle }}
            </div>

            <p class="card-description">
                {{ str_limit( $ad->description, 280 ) }}
            </p>

        </div>

        <div class="card-footer text-center">

            <i class="ion-ios-home-outline">&nbsp; 0 {!! trans( 'webpage-text.card-exchange-text' ) !!}</i>
            &nbsp; - &nbsp;
            <a href="#"><i class="ion-ios-chatbubble-outline">&nbsp; 0 {!! trans( 'webpage-text.card-comments-text' ) !!}</i></a>
            &nbsp; - &nbsp;
            <a href="{{ route( 'ads.show', $ad->id ) }}"><i class="ion-ios-eye-outline">&nbsp; {!! trans( 'webpage-text.card-see-all-text' ) !!}</i></a>

        </div>

    </article>

    @if( Sentinel::getUser()->id == $ad->user->id && $page == 'my-ads' )

        <div class="row" style="margin : 20px 0;">

            <div class="col-md-6 text-right">
                <a href="{{ route( 'ads.edit', $ad->id ) }}" class="btn btn-ghost">Modifier</a>
            </div>

            <div class="col-md-6 text-left delete_button">
                <a href="" class="btn btn-full">Supprimer</a>
            </div>

            <div class="no_yes_buttons">

                <div class="col-md-3" style="padding : 0; width: auto;">
                    <a href="" class="btn btn-ghost no_button" style="border-top-right-radius : 0; border-bottom-right-radius : 0;">{!! trans( 'webpage-text.no-text' ) !!}</a>
                </div>

                {!! Form::open( [ 'route' => [ 'delete-ad', $ad->id ], 'class' => 'form-delete-ad', 'style' => 'margin-top : 0;' ] ) !!}

                    <div class="col-md-3" style="padding : 0; width: auto;">
                        <input type="submit" class="btn btn-full yes_button" style="border-top-left-radius : 0; border-bottom-left-radius : 0;" value="{!! trans( 'webpage-text.yes-text' ) !!}">
                    </div>

                {!! Form::close() !!}

            </div>

        </div>

    @endif

</div>
<!-- End ... COL MD 6 -->
