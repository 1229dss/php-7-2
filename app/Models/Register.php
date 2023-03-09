<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    // use HasFactory;

    // テーブル名
    protected $table = 'users';

    // 可変項目
    protected $fillable = [
        'user_name', 'email', 'password', 'educational_background_id', 'previous_industry_id', 'previous_occupation_id', 'created_at',
    ];
    public $timestamps = false;

}

