<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function pdf()
    {
        return $this->hasOne(Pdf::class);
    }

    public function booklet()
    {
        return $this->hasOne(Booklet::class);
    }


    protected $fillable = ['title','description','lesson_id','user_id'];

}
