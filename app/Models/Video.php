<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected   $guarded = [];

    public function courselist()
    {
        return $this->belongsTo(Courselist::class, 'courselists_id', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}
