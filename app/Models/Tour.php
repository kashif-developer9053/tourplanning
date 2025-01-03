<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';
    protected $primaryKey = 'tour_id';
    public $timestamps = false;

    public function schedules()
    {
        return $this->hasMany(Schedule::class,"tour_id","tour_id");
    }
}
