<?php namespace AH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Sentinel;

class ModifyUserProfileRequest extends FormRequest
    {

    public function authorize()
        {

        return TRUE;

        }

    // ------------------------------------------------------------

    public function rules( Request $request )
        {

        $request->session()->flash( 'message', 'error|' . trans( 'webpage-text.invalid-form' ) );

        return
            [

            'username'      =>
                [

                'required',
                Rule::unique( 'users' )->ignore( Sentinel::getUser()->id )

                ],
            'email'         =>
                [

                'required',
                'email',
                Rule::unique( 'users' )->ignore( Sentinel::getUser()->id )

                ]

            ];

        }

    }
