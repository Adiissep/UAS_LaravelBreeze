<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'title',
        'content',
        'cover_image',
        'user_id'
    ];
    
}
