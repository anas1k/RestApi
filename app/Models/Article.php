<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\ArticleObserver;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author',
        'category',
        'published_at'
    ];
    public static function boot()
    {
        parent::boot();
        self::observe(new ArticleObserver);
    }
}
