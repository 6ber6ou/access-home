<?php namespace AH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;

class SendContactEmailRequest extends FormRequest
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

            'name'      =>      'required',
            'email'     =>      'required|email',
            'body'      =>      'required'

            ];

        }

    // ------------------------------------------------------------

    public function response(array $errors )
        {

        session()->flash( 'message', 'error|' . trans( 'webpage-text.invalid-form' ) );

        return $this->redirector->to( $this->getRedirectUrl() )->withInput( $this->except( $this->dontFlash ) )->withErrors( $errors, $this->errorBag );

        }

    }
