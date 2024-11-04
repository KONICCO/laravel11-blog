<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // protected $table = 'blog_posts'; // replace with your actual table name
    protected $fillable = ['title', 'author', 'slug', 'body'];
    protected $with = [ 'author', 'category'];
    public function author(): BelongsTo
    {

    return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {

    return $this->belongsTo(related: Category::class);
    }
}
