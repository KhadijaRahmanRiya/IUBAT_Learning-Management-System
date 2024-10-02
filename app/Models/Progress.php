<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Progress extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userRelation()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function courseRelation()
    {
        return $this->belongsTo(Courselist::class, 'course_id', 'id');
    }
    public function contentRelation()
    {
        return $this->hasMany(Video::class, 'content_id', 'id');
    }
}
