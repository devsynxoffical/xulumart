<?php

namespace App\Helpers;

class Media
{
    /**
     * Public URL for a website asset under images/{folder}/{file},
     * with a safe fallback when the DB filename is missing on disk.
     */
    public static function url(?string $folder, ?string $file, ?string $fallback = null): string
    {
        $folder = trim((string) $folder, '/');
        $file = ltrim((string) $file, '/');

        if ($file !== '' && self::exists($folder, $file)) {
            return asset($folder ? "images/{$folder}/{$file}" : "images/{$file}");
        }

        if ($fallback && self::exists(null, ltrim($fallback, '/'), true)) {
            return asset(ltrim($fallback, '/'));
        }

        // Prefer known local brand assets when website logos are missing.
        foreach ([
            'images/website/xulumart_logo.png',
            'images/website/logo.png',
            'frontend/images/animation-banner-update.png',
            'frontend/images/laramart-logo-f1.png',
        ] as $candidate) {
            if (is_file(public_path($candidate)) || is_file(base_path($candidate))) {
                return asset($candidate);
            }
        }

        return asset('favicon.ico');
    }

    public static function exists(?string $folder, string $file, bool $absoluteFromPublic = false): bool
    {
        if ($absoluteFromPublic) {
            return is_file(public_path($file)) || is_file(base_path($file));
        }
        $rel = $folder ? "images/{$folder}/{$file}" : "images/{$file}";
        return is_file(public_path($rel)) || is_file(base_path($rel));
    }
}
