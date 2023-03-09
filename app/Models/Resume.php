<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    // テーブル名
    protected $table = 'resumes';
    // 可変項目
    protected $fillable = [
        'user_id', 
        'title', 
        'date', 
        'name', 
        'kana_name', 
        'birth', 
        'sex', 
        'post_code', 
        'address', 
        'kana_address', 
        'tel', 
        'email', 
        'post_code_spare', 
        'address_spare', 
        'kana_address_spare', 
        'tel_spare', 
        'email_spare', 
        'motivation', 
        'remarks', 
        'desirable_industry_id', 
        'desirable_occupation_id', 
        'updated_at',
    ];
    // public $timestamps = false;
}

