<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider_Image extends Model
{
    use HasFactory;
    protected $guarded = []; //its needed when inserting multiple images in database
}
