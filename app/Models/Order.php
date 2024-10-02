<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Courselist::class, 'courselist_id', 'id');
    }
    public function student()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
