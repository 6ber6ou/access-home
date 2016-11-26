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

        $request->session()->flash( 'message', 'error|' . trans( 'webpage-text.invalid_form' ) );

        return
            [

            'name'      =>      'required',
            'email'     =>      'required|email',
            'body'      =>      'required'

            ];

        }

    }
