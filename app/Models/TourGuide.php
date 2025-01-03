<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    protected $table = 'tour_guide';
    protected $primaryKey = 'tour_guide_id';
    public $timestamps = false;
}
