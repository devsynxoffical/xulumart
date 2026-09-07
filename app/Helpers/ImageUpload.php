<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageUpload
{
    /**
     * Save an uploaded image using Intervention when available,
     * otherwise fall back to a plain file move.
     */
    public static function save(UploadedFile $file, string $relativeDir, ?string $filename = null): string
    {
        $dir = public_path($relativeDir);
        if (!File::isDirectory($dir)) {
            File::makeDirectory($dir, 0755, true);
        }

        $filename = $filename ?: (time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension());
        $path = $dir . DIRECTORY_SEPARATOR . $filename;

        try {
            if (function_exists('finfo_file') && extension_loaded('fileinfo')) {
                Image::make($file)->save($path);
            } else {
                $file->move($dir, $filename);
            }
        } catch (\Throwable $e) {
            // Fallback if Intervention/GD fails on this PHP build
            if ($file->getRealPath() && File::exists($file->getRealPath())) {
                File::copy($file->getRealPath(), $path);
            } else {
                $file->move($dir, $filename);
            }
        }

        return $filename;
    }

    public static function normalizeUrl(?string $url): ?string
    {
        if ($url === null || trim($url) === '') {
            return null;
        }
        $url = trim($url);
        if (!preg_match('#^https?://#i', $url)) {
            $url = 'https://' . $url;
        }
        return $url;
    }
}
