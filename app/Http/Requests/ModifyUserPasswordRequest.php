<?php namespace AH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;

class ModifyUserPasswordRequest extends FormRequest
    {

    public function authorize()
        {

        return TRUE;

        }

    // ------------------------------------------------------------

    public function rules( Request $request )
        {

        return
            [

            'old_password'      =>      'required|min:6',
            'password'          =>      'required|min:6|confirmed'

            ];

        }

    // ------------------------------------------------------------

    public function response(array $errors )
        {

        session()->flash( 'message', 'error|' . trans( 'webpage-text.invalid-form' ) );

        return $this->redirector->to( $this->getRedirectUrl() )->withInput( $this->except( $this->dontFlash ) )->withErrors( $errors, $this->errorBag );

        }

    }
