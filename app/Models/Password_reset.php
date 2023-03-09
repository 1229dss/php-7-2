<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;



class Password_reset extends Model
{
    // テーブル名
    protected $table = 'password_resets';
    // 可変項目
    protected $fillable = [
        'email', 
        'token', 
    ];
    public $timestamps = false;

}
