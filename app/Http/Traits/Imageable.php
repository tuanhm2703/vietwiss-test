<?php

namespace App\Http\Traits;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

trait Imageable {
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function createImages($images, $folder = 'images') {
        foreach ($images as $image) {
            $filename = time().".".$image->getClientOriginalExtension();
            $path = Storage::put($folder, $image);
            $imageSize = getimagesize(storage_path("app/public/$path"));
            $this->images()->create([
                'name' => $filename,
                'width' => $imageSize[0],
                'height' => $imageSize[1],
                'size' => $imageSize['bits'],
                'path' => $path
            ]);
        }
    }

    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
