<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume_licence extends Model
{
    // テーブル名
    protected $table = 'resumes_licence';
    // 可変項目
    protected $fillable = [
        'resume_id', 
        'user_id', 
        'licence_year1',
        'licence_month1',
        'licence_body1',
        'licence_year2',
        'licence_month2',
        'licence_body2',
        'licence_year3',
        'licence_month3',
        'licence_body3',
        'licence_year4',
        'licence_month4',
        'licence_body4',
        'licence_year5',
        'licence_month5',
        'licence_body5',
        'licence_year6',
        'licence_month6',
        'licence_body6',
    ];
    public $timestamps = false;

}

