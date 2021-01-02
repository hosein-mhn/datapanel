<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }


}
