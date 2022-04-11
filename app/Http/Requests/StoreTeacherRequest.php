<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'subject_id' => 'required',
            'user_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('crud.name'),
            'last_name' => __('crud.last_name'),
            'email' => __('crud.email'),
            'subject_id' => __('crud.subject_id'),
            'user_id' => __('crud.user_id'),
        ];
    }
}
