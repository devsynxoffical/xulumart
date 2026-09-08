<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function booted()
    {
        static::saved(function () {
            \App\Http\Controllers\SitemapController::flushCache();
        });
        static::deleted(function () {
            \App\Http\Controllers\SitemapController::flushCache();
        });
    }

    public function category()
    {
        return $this->belongsTo(Category:: class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand:: class);
    }

    public function variation()
    {
        return $this->hasMany(ProductVariation:: class);
    }

    public function product_image()
    {
        return $this->hasMany(ProductImage:: class);
    }
}