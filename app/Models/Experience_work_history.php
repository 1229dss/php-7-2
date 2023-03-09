<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience_work_history extends Model
{
    // テーブル名
    protected $table = 'experiences_work_history';
    // 可変項目
    protected $fillable = [
        'experience_id', 
        'user_id', 
        'work_history_company1', 
        'work_history_period1', 
        'work_history_content1', 
        'work_history_capital1', 
        'work_history_employees1',
        'work_history_business1', 
        'work_history_business_period1',  
        'work_history_body1', 
        'work_history_company2', 
        'work_history_period2', 
        'work_history_content2', 
        'work_history_capital2', 
        'work_history_employees2',
        'work_history_business2', 
        'work_history_business_period2',  
        'work_history_body2', 
        'work_history_company3', 
        'work_history_period3', 
        'work_history_content3', 
        'work_history_capital3', 
        'work_history_employees3',
        'work_history_business3', 
        'work_history_business_period3',  
        'work_history_body3', 
        'work_history_company4', 
        'work_history_period4', 
        'work_history_content4', 
        'work_history_capital4', 
        'work_history_employees4',
        'work_history_business4', 
        'work_history_business_period4',  
        'work_history_body4', 
        'work_history_company5', 
        'work_history_period5', 
        'work_history_content5', 
        'work_history_capital5', 
        'work_history_employees5',
        'work_history_business5', 
        'work_history_business_period5',  
        'work_history_body5', 
    ];
    public $timestamps = false;
}

