<?php

namespace App\Models;

use App\Http\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory, Imageable;

    protected $fillable = [
        'title',
        'order',
        'type',
        'description'
    ];
}
