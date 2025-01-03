<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $table = 'news_event';
    protected $primaryKey = 'news_id';
    public $timestamps = false;
}
