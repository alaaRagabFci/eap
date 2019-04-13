<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
             'phone'  =>'required|numeric',
             'email'  =>'required|email',
             'waiting_time'     =>'required|numeric',
             'receving_time'    =>'required|numeric',
             'delivering_time'  =>'required|numeric'
        ];
    }

}
