<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSpecialistRequest extends FormRequest
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
        'name_ar'  =>'required|unique:specialists,name_ar,'.$this->route('specialist'),
        'name_en'  =>'required|unique:specialists,name_en,'.$this->route('specialist'),
        ];
    }

}
