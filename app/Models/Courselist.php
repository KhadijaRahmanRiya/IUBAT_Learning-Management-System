<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Courselist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsto(Category::class);
    }
    public function userRelation()
    {
        return $this->belongsto(User::class, 'teacher_id', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }


    public function videos()
    {
        return $this->hasMany(Video::class, 'courselists_id', 'id');
    }
}
