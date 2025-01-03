<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'schedule_id';
    public $timestamps = false;

    public function tour_guide()
    {
        return $this->belongsTo(TourGuide::class,"tour_guide_id","tour_guide_id");
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class,"tour_id","tour_id");
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class,"schedule_id","schedule_id");
    }

}
