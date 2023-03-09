<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume_work_history extends Model
{
    // テーブル名
    protected $table = 'resumes_work_history';
    // 可変項目
    protected $fillable = [
        'resume_id', 
        'user_id', 
        'work_history_year1', 
        'work_history_month1', 
        'work_history_body1', 
        'work_history_year2', 
        'work_history_month2', 
        'work_history_body2', 
        'work_history_year3', 
        'work_history_month3', 
        'work_history_body3', 
        'work_history_year4', 
        'work_history_month4', 
        'work_history_body4', 
        'work_history_year5', 
        'work_history_month5', 
        'work_history_body5', 
        'work_history_year6', 
        'work_history_month6', 
        'work_history_body6', 
        'work_history_year7', 
        'work_history_month7', 
        'work_history_body7', 
        'work_history_year8', 
        'work_history_month8', 
        'work_history_body8', 
        'work_history_year9', 
        'work_history_month9', 
        'work_history_body9', 
        'work_history_year10', 
        'work_history_month10', 
        'work_history_body10',  
    ];
    public $timestamps = false;

}

