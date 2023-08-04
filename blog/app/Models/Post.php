<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Http\Request;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
