<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'width',
        'height',
        'size'
    ];

    protected $appends = [
        'image_path'
    ];

    public function getImagePathAttribute() {
        return Storage::url($this->path);
    }
}
