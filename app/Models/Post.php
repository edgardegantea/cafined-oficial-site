<?php

namespace App\Models;

use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


#[ObservedBy(PostObserver::class)]
class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image_path',
        'image_path_2',
        'user_id',
        'category_id',
        'is_published',
        'published_at',
    ];


    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime'
    ];


    // Relación muchos a muchos
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
