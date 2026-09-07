<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreMenu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'parent_id', 'position', 'description', 'is_active'];

    public function parent()
    {
        return $this->belongsTo(StoreMenu::class, 'parent_id');
    }

    public function child()
    {
        return $this->hasMany(StoreMenu::class, 'parent_id')->orderBy('position');
    }
}
