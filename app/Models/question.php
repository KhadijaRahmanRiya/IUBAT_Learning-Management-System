<?php

namespace App\Models;

use App\Models\Courselist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class question extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function course()
    {
        return $this->belongsTo(Courselist::class,'course_id','id');
    }
    public function Teacher()
    {
        return $this->belongsTo(user::class,'teacher_id','id');
    }
}
