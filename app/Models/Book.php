<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Comment;

class Book extends Model
{
    use HasFactory;
    
    
    
    protected $fillable = [
        'title',
        'desc',
        'published_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    public $lowLevelRelations = [
        'author',
    ];
    public $highLevelRelations = [
        'comments',
    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
