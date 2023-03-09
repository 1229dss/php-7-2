<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;



class Post_list extends Model
{
    // テーブル名
    protected $table = 'lists';
    // 可変項目
    protected $fillable = [
        'user_id', 
        'resume_id', 
        'experience_id', 
    ];
    public $timestamps = false;

}
