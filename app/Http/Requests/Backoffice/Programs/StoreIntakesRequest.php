<?php

namespace App\Http\Requests\Backoffice\Programs;

use Illuminate\Foundation\Http\FormRequest;

class StoreIntakesRequest extends FormRequest
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
            'start_date' => 'required',
            'end_date' =>  'required'
        ];
    }
}
