<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume_educational_background extends Model
{
    // テーブル名
    protected $table = 'resumes_educational_background';
    // 可変項目
    protected $fillable = [
        'resume_id', 
        'user_id', 
        'educational_background_year1',
        'educational_background_month1', 
        'educational_background_body1', 
        'educational_background_year2',
        'educational_background_month2', 
        'educational_background_body2', 
        'educational_background_year3',
        'educational_background_month3', 
        'educational_background_body3', 
        'educational_background_year4',
        'educational_background_month4', 
        'educational_background_body4', 
        'educational_background_year5',
        'educational_background_month5', 
        'educational_background_body5', 
        'educational_background_year6',
        'educational_background_month6', 
        'educational_background_body6', 
        'educational_background_year7',
        'educational_background_month7', 
        'educational_background_body7', 
        'educational_background_year8',
        'educational_background_month8', 
        'educational_background_body8', 
    ];
    public $timestamps = false;

}

