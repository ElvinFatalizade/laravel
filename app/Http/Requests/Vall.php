<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Vall extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function attributes(){

      return[
        'name'=>'Ad Soyad',


      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required |min:5',
            'subject'=>'required | min:5',
            'pass'=>'required |confirmed|min:6',

        ];
    }
}
