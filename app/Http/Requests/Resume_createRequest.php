<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


class Resume_createRequest extends FormRequest
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
    // public function rules(Request $request)
    public function rules(Request $request)
    {
        $inputs = $request->all();
        
        \Session::flash('title', $inputs['title']);
        \Session::flash('date', $inputs['date']);
        \Session::flash('name', $inputs['name']);
        \Session::flash('kana_name', $inputs['kana_name']);
        \Session::flash('birth', $inputs['birth']);
        \Session::flash('sex', $inputs['sex']);
        \Session::flash('post_code', $inputs['post_code']);
        \Session::flash('address', $inputs['address']);
        \Session::flash('kana_address', $inputs['kana_address']);
        \Session::flash('tel', $inputs['tel']);
        \Session::flash('email', $inputs['email']);
        \Session::flash('motivation', $inputs['motivation']);
        \Session::flash('remarks', $inputs['remarks']);
        \Session::flash('desirable_industry_id', $inputs['desirable_industry_id']);
        \Session::flash('desirable_occupation_id', $inputs['desirable_occupation_id']);

        \Session::flash('post_code_spare', $inputs['post_code_spare']);
        \Session::flash('address_spare', $inputs['address_spare']);
        \Session::flash('kana_address_spare', $inputs['kana_address_spare']);
        \Session::flash('tel_spare', $inputs['tel_spare']);
        \Session::flash('email_spare', $inputs['email_spare']);

        \Session::flash('educational_background_year1', $inputs['educational_background_year1']);
        \Session::flash('educational_background_month1', $inputs['educational_background_month1']);
        \Session::flash('educational_background_body1', $inputs['educational_background_body1']);
        \Session::flash('educational_background_year2', $inputs['educational_background_year2']);
        \Session::flash('educational_background_month2', $inputs['educational_background_month2']);
        \Session::flash('educational_background_body2', $inputs['educational_background_body2']);
        \Session::flash('educational_background_year3', $inputs['educational_background_year3']);
        \Session::flash('educational_background_month3', $inputs['educational_background_month3']);
        \Session::flash('educational_background_body3', $inputs['educational_background_body3']);
        \Session::flash('educational_background_year4', $inputs['educational_background_year4']);
        \Session::flash('educational_background_month4', $inputs['educational_background_month4']);
        \Session::flash('educational_background_body4', $inputs['educational_background_body4']);
        \Session::flash('educational_background_year5', $inputs['educational_background_year5']);
        \Session::flash('educational_background_month5', $inputs['educational_background_month5']);
        \Session::flash('educational_background_body5', $inputs['educational_background_body5']);
        \Session::flash('educational_background_year6', $inputs['educational_background_year6']);
        \Session::flash('educational_background_month6', $inputs['educational_background_month6']);
        \Session::flash('educational_background_body6', $inputs['educational_background_body6']);
        \Session::flash('educational_background_year7', $inputs['educational_background_year7']);
        \Session::flash('educational_background_month7', $inputs['educational_background_month7']);
        \Session::flash('educational_background_body7', $inputs['educational_background_body7']);
        \Session::flash('educational_background_year8', $inputs['educational_background_year8']);
        \Session::flash('educational_background_month8', $inputs['educational_background_month8']);
        \Session::flash('educational_background_body8', $inputs['educational_background_body8']);

        \Session::flash('work_history_year1', $inputs['work_history_year1']);
        \Session::flash('work_history_month1', $inputs['work_history_month1']);
        \Session::flash('work_history_body1', $inputs['work_history_body1']);
        \Session::flash('work_history_year2', $inputs['work_history_year2']);
        \Session::flash('work_history_month2', $inputs['work_history_month2']);
        \Session::flash('work_history_body2', $inputs['work_history_body2']);
        \Session::flash('work_history_year3', $inputs['work_history_year3']);
        \Session::flash('work_history_month3', $inputs['work_history_month3']);
        \Session::flash('work_history_body3', $inputs['work_history_body3']);
        \Session::flash('work_history_year4', $inputs['work_history_year4']);
        \Session::flash('work_history_month4', $inputs['work_history_month4']);
        \Session::flash('work_history_body4', $inputs['work_history_body4']);
        \Session::flash('work_history_year5', $inputs['work_history_year5']);
        \Session::flash('work_history_month5', $inputs['work_history_month5']);
        \Session::flash('work_history_body5', $inputs['work_history_body5']);
        \Session::flash('work_history_year6', $inputs['work_history_year6']);
        \Session::flash('work_history_month6', $inputs['work_history_month6']);
        \Session::flash('work_history_body6', $inputs['work_history_body6']);
        \Session::flash('work_history_year7', $inputs['work_history_year7']);
        \Session::flash('work_history_month7', $inputs['work_history_month7']);
        \Session::flash('work_history_body7', $inputs['work_history_body7']);
        \Session::flash('work_history_year8', $inputs['work_history_year8']);
        \Session::flash('work_history_month8', $inputs['work_history_month8']);
        \Session::flash('work_history_body8', $inputs['work_history_body8']);
        \Session::flash('work_history_year9', $inputs['work_history_year9']);
        \Session::flash('work_history_month9', $inputs['work_history_month9']);
        \Session::flash('work_history_body9', $inputs['work_history_body9']);
        \Session::flash('work_history_year10', $inputs['work_history_year10']);
        \Session::flash('work_history_month10', $inputs['work_history_month10']);
        \Session::flash('work_history_body10', $inputs['work_history_body10']);

        \Session::flash('licence_year1', $inputs['licence_year1']);
        \Session::flash('licence_month1', $inputs['licence_month1']);
        \Session::flash('licence_body1', $inputs['licence_body1']);
        \Session::flash('licence_year2', $inputs['licence_year2']);
        \Session::flash('licence_month2', $inputs['licence_month2']);
        \Session::flash('licence_body2', $inputs['licence_body2']);
        \Session::flash('licence_year3', $inputs['licence_year3']);
        \Session::flash('licence_month3', $inputs['licence_month3']);
        \Session::flash('licence_body3', $inputs['licence_body3']);
        \Session::flash('licence_year4', $inputs['licence_year4']);
        \Session::flash('licence_month4', $inputs['licence_month4']);
        \Session::flash('licence_body4', $inputs['licence_body4']);
        \Session::flash('licence_year5', $inputs['licence_year5']);
        \Session::flash('licence_month5', $inputs['licence_month5']);
        \Session::flash('licence_body5', $inputs['licence_body5']);
        \Session::flash('licence_year6', $inputs['licence_year6']);
        \Session::flash('licence_month6', $inputs['licence_month6']);
        \Session::flash('licence_body6', $inputs['licence_body6']);

        \Session::flash('check', '1');

        return [
            'title' => 'required', 
            'date' => 'required | max:20', 
            'name' => 'required | max:30', 
            'kana_name' => 'required | max:30', 
            'birth' => 'required | max:20', 
            'post_code' => 'required | max:8', 
            'address' => 'required | max:100', 
            'kana_address' => 'required | max:100', 
            'tel' => 'required | max:13', 
            'email' => 'required | email', 
            'motivation' => 'required | max:400', 
            'remarks' => 'max:400', 
            'desirable_industry_id' => 'required', 
            'desirable_occupation_id' => 'required', 

            'post_code_spare' => 'max:8', 
            'address_spare' => 'max:100', 
            'kana_address_spare' => 'max:100', 
            'tel_spare' => 'max:13', 
            'email_spare' => 'nullable | email', 

            'educational_background_year1' => 'required | max:4',
            'educational_background_month1' => 'required | max:2', 
            'educational_background_body1' => 'required | max:30', 
            'educational_background_year2' => 'required | max:4',
            'educational_background_month2' => 'required | max:2', 
            'educational_background_body2' => 'required | max:30', 
            'educational_background_year3' => 'max:4',
            'educational_background_mont3' => 'max:2', 
            'educational_background_body3' => 'max:30', 
            'educational_background_year4' => 'max:4',
            'educational_background_mont4' => 'max:2', 
            'educational_background_body4' => 'max:30', 
            'educational_background_year5' => 'max:4',
            'educational_background_mont5' => 'max:2', 
            'educational_background_body5' => 'max:30', 
            'educational_background_year6' => 'max:4',
            'educational_background_mont6' => 'max:2', 
            'educational_background_body6' => 'max:30', 
            'educational_background_year7' => 'max:4',
            'educational_background_mont7' => 'max:2', 
            'educational_background_body7' => 'max:30', 
            'educational_background_year8' => 'max:4',
            'educational_background_mont8' => 'max:2', 
            'educational_background_body8' => 'max:30', 

            'work_history_year1' => 'max:4',
            'work_history_month1' => 'max:2', 
            'work_history_body1' => 'max:30', 
            'work_history_year2' => 'max:4',
            'work_history_month2' => 'max:2', 
            'work_history_body2' => 'max:30',
            'work_history_year3' => 'max:4',
            'work_history_month3' => 'max:2', 
            'work_history_body3' => 'max:30',
            'work_history_year4' => 'max:4',
            'work_history_month4' => 'max:2', 
            'work_history_body4' => 'max:30',
            'work_history_year4' => 'max:4',
            'work_history_month5' => 'max:2', 
            'work_history_body5' => 'max:30',
            'work_history_year5' => 'max:4',
            'work_history_month6' => 'max:2', 
            'work_history_body6' => 'max:30',
            'work_history_year7' => 'max:4',
            'work_history_month7' => 'max:2', 
            'work_history_body7' => 'max:30',
            'work_history_year8' => 'max:4',
            'work_history_month8' => 'max:2', 
            'work_history_body8' => 'max:30',
            'work_history_year9' => 'max:4',
            'work_history_month9' => 'max:2', 
            'work_history_body9' => 'max:30',
            'work_history_year10' => 'max:4',
            'work_history_month10' => 'max:2', 
            'work_history_body10' => 'max:30',

            'licence_year1' => 'max:4',
            'licence_month1' => 'max:2', 
            'licence_body1' => 'max:30',
            'licence_year2' => 'max:4',
            'licence_month2' => 'max:2', 
            'licence_body2' => 'max:30',
            'licence_year3' => 'max:4',
            'licence_month3' => 'max:2', 
            'licence_body3' => 'max:30',
            'licence_year4' => 'max:4',
            'licence_month4' => 'max:2', 
            'licence_body4' => 'max:30',
            'licence_year5' => 'max:4',
            'licence_month5' => 'max:2', 
            'licence_body5' => 'max:30',
            'licence_year6' => 'max:4',
            'licence_month6' => 'max:2', 
            'licence_body6' => 'max:30',

        ];
    }
}
