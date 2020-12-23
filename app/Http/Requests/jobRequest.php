<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class jobRequest extends FormRequest
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
            'job_title' => 'required|min:3',
            'company_name' => 'required',
            'job_location' => 'required',
            'salary' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required'=> "can't left empty...."
        ];
    }
}
