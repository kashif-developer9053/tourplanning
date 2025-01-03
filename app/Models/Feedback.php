<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'feedback_id';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Users::class,'user_id','user_id');
    }

    public function schedule()
    {
        return $this->belongsTo(Booking::class,'schedule_id','schedule_id');
    }

}
