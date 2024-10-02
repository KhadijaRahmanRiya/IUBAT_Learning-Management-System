<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function attendence( )
     {
        return $this->belongsTo(Student::class , 'student_id', 'id');
     }
}
