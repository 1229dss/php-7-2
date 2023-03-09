<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


class UpdateRequest extends FormRequest
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
        \Session::flash('new_email', $inputs['new_email']);
        \Session::flash('educational_background_id', $inputs['educational_background_id']);
        \Session::flash('previous_industry_id', $inputs['previous_industry_id']);
        \Session::flash('previous_occupation_id', $inputs['previous_occupation_id']);

        \Session::flash('check', '1');


        return [
            'user_name' => 'required | max:10',
            'email' => 'required | email',
            'new_email' => 'required | email',
            'password' => 'required',
            'new_password' => 'required',
            'educational_background_id' => 'required',
        ];
    }
}
