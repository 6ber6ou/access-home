<?php namespace AH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdRequest extends FormRequest
    {

    public function authorize()
        {

        return TRUE;

        }

    // ------------------------------------------------------------

    public function rules()
        {

        return
            [

            'title'                 =>      'required',
            'subtitle'              =>      'required',
            'description'           =>      'required',
            'price'                 =>      'required|numeric',
            'currency'              =>      'required',
            'period'                =>      'required',
            'country'               =>      'required',
            'city'                  =>      'required',
            'zip'                   =>      'required',
            'address'               =>      'required',
            'livingroom'            =>      'required|numeric',
            'dining_room'           =>      'required|numeric',
            'kitchen'               =>      'required|numeric',
            'kitchenette'           =>      'required|numeric',
            'bathroom'              =>      'required|numeric',
            'separed_wc'            =>      'required|numeric',
            'garage'                =>      'required|numeric',
            'cave'                  =>      'required|numeric',
            'double_bedroom'        =>      'required|numeric',
            'simple_bedroom'        =>      'required|numeric',
            'nb_double_bed'         =>      'required|numeric',
            'nb_simple_bed'         =>      'required|numeric',
            'nb_baby_bed'           =>      'required|numeric',
            'nb_sofa_bed'           =>      'required|numeric',
            'housing_area'          =>      'required|numeric'

            ];

        }

    // ------------------------------------------------------------

    public function response(array $errors )
        {

        session()->flash( 'message', 'error|' . trans( 'webpage-text.invalid-form' ) );

        return $this->redirector->to( $this->getRedirectUrl() )->withInput( $this->except( $this->dontFlash ) )->withErrors( $errors, $this->errorBag );

        }

    }
