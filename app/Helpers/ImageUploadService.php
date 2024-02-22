<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class ImageUploadService
{
    public static function uploadImage(UploadedFile $file, $platform = 'local', $path = 'images')
    {
        
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_' . Str::random(10) . '.' . $extension;

        $filename = $filename;
        $filePath = $file->storeAs($path, $filename, 'public');
        return $filePath;
    }

}
