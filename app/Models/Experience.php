<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    // テーブル名
    protected $table = 'experiences';
    // 可変項目
    protected $fillable = [
        'user_id', 
        'title', 
        'date', 
        'name', 
        'career', 
        'skill', 
        'licence', 
        'summary', 
        'desirable_industry_id', 
        'desirable_occupation_id', 
        'updated_at',
    ];
    // public $timestamps = false;
}

