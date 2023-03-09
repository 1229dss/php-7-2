<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


class Experience_createRequest extends FormRequest
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
        \Session::flash('career', $inputs['career']);
        \Session::flash('skill', $inputs['skill']);
        \Session::flash('licence', $inputs['licence']);
        \Session::flash('summary', $inputs['summary']);
        \Session::flash('desirable_industry_id', $inputs['desirable_industry_id']);
        \Session::flash('desirable_occupation_id', $inputs['desirable_occupation_id']);

        \Session::flash('work_history_company1', $inputs['work_history_company1']);
        \Session::flash('work_history_period1', $inputs['work_history_period1']);
        \Session::flash('work_history_content1', $inputs['work_history_content1']);
        \Session::flash('work_history_capital1', $inputs['work_history_capital1']);
        \Session::flash('work_history_employees1', $inputs['work_history_employees1']);
        \Session::flash('work_history_business1', $inputs['work_history_business1']);
        \Session::flash('work_history_business_period1', $inputs['work_history_business_period1']);
        \Session::flash('work_history_body1', $inputs['work_history_body1']);
        \Session::flash('work_history_company2', $inputs['work_history_company2']);
        \Session::flash('work_history_period2', $inputs['work_history_period2']);
        \Session::flash('work_history_content2', $inputs['work_history_content2']);
        \Session::flash('work_history_capital2', $inputs['work_history_capital2']);
        \Session::flash('work_history_employees2', $inputs['work_history_employees2']);
        \Session::flash('work_history_business2', $inputs['work_history_business2']);
        \Session::flash('work_history_business_period2', $inputs['work_history_business_period2']);
        \Session::flash('work_history_body2', $inputs['work_history_body2']);
        \Session::flash('work_history_company3', $inputs['work_history_company3']);
        \Session::flash('work_history_period3', $inputs['work_history_period3']);
        \Session::flash('work_history_content3', $inputs['work_history_content3']);
        \Session::flash('work_history_capital3', $inputs['work_history_capital3']);
        \Session::flash('work_history_employees3', $inputs['work_history_employees3']);
        \Session::flash('work_history_business3', $inputs['work_history_business3']);
        \Session::flash('work_history_business_period3', $inputs['work_history_business_period3']);
        \Session::flash('work_history_body3', $inputs['work_history_body3']);
        \Session::flash('work_history_company4', $inputs['work_history_company4']);
        \Session::flash('work_history_period4', $inputs['work_history_period4']);
        \Session::flash('work_history_content4', $inputs['work_history_content4']);
        \Session::flash('work_history_capital4', $inputs['work_history_capital4']);
        \Session::flash('work_history_employees4', $inputs['work_history_employees4']);
        \Session::flash('work_history_business4', $inputs['work_history_business4']);
        \Session::flash('work_history_business_period4', $inputs['work_history_business_period4']);
        \Session::flash('work_history_body4', $inputs['work_history_body4']);
        \Session::flash('work_history_company5', $inputs['work_history_company5']);
        \Session::flash('work_history_period5', $inputs['work_history_period5']);
        \Session::flash('work_history_content5', $inputs['work_history_content5']);
        \Session::flash('work_history_capital5', $inputs['work_history_capital5']);
        \Session::flash('work_history_employees5', $inputs['work_history_employees5']);
        \Session::flash('work_history_business5', $inputs['work_history_business5']);
        \Session::flash('work_history_business_period5', $inputs['work_history_business_period5']);
        \Session::flash('work_history_body5', $inputs['work_history_body5']);

        \Session::flash('check', '1');

        return [
            'title' => 'required', 
            'date' => 'required | max:20', 
            'name' => 'required | max:30', 
            'career' => 'required | max:250', 
            'skill' => 'max:400', 
            'licence' => 'max:400', 
            'summary' => 'required | max:400', 
            'desirable_industry_id' => 'required', 
            'desirable_occupation_id' => 'required', 

            'work_history_company1' => 'required | max:20', 
            'work_history_period1' => 'required | max:20', 
            'work_history_content1' => 'required | max:20', 
            'work_history_capital1' => 'required | max:20', 
            'work_history_employees1' => 'required | max:20',
            'work_history_business1' => 'required | max:20', 
            'work_history_business_period1' => 'required | max:20',  
            'work_history_body1' => 'required | max:400', 

            'work_history_company2' => 'max:20', 
            'work_history_period2' => 'max:20', 
            'work_history_content2' => 'max:20', 
            'work_history_capital2' => 'max:20', 
            'work_history_employees2' => 'max:20',
            'work_history_business2' => 'max:20', 
            'work_history_business_period2' => 'max:20',  
            'work_history_body2' => 'max:400',
            'work_history_company3' => 'max:20', 
            'work_history_period3' => 'max:20', 
            'work_history_content3' => 'max:20', 
            'work_history_capital3' => 'max:20', 
            'work_history_employees3' => 'max:20',
            'work_history_business3' => 'max:20', 
            'work_history_business_period3' => 'max:20',  
            'work_history_body3' => 'max:400', 
            'work_history_company4' => 'max:20', 
            'work_history_period4' => 'max:20', 
            'work_history_content4' => 'max:20', 
            'work_history_capital4' => 'max:20', 
            'work_history_employees4' => 'max:20',
            'work_history_business4' => 'max:20', 
            'work_history_business_period4' => 'max:20',  
            'work_history_body4' => 'max:400', 
            'work_history_company5' => 'max:20', 
            'work_history_period5' => 'max:20', 
            'work_history_content5' => 'max:20', 
            'work_history_capital5' => 'max:20', 
            'work_history_employees5' => 'max:20',
            'work_history_business5' => 'max:20', 
            'work_history_business_period5' => 'max:20',  
            'work_history_body5' => 'max:400', 

        ];
    }
}
