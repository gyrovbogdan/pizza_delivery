<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Dish extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
