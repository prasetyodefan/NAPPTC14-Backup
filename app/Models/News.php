<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'body',
        'category_name', 
        'image_url',
        'date',
        'region',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_name', 'name');
    }
}
