<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        $inputs = $request->all();
        \Session::flash('user_name', $inputs['user_name']);
        \Session::flash('email', $inputs['email']);
        // if (isset($inputs['educational_background'])){
        //     \Session::flash('educational_background', $inputs['educational_background']);
        // }
        \Session::flash('educational_background_id', $inputs['educational_background_id']);
        \Session::flash('previous_industry_id', $inputs['previous_industry_id']);
        \Session::flash('previous_occupation_id', $inputs['previous_occupation_id']);

        return [
            'user_name' => 'required | max:10',
            'email' => 'required | email',
            'password' => 'required',
            'password_conf' => 'required | same:password',
            'educational_background_id' => 'required',
        ];
    }
}
