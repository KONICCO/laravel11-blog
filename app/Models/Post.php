<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // protected $table = 'blog_posts'; // replace with your actual table name
    protected $fillable = ['title', 'author', 'slug', 'body'];
    //eager loding
    protected $with = ['author', 'category'];
    public function author(): BelongsTo
    {

        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {

        return $this->belongsTo(related: Category::class);
    }
    public function scopeFilter(Builder $builder, array $filters)
    {
        $builder->when(isset($filters['search']) ? $filters['search'] : false, function ($builder, $search) {
            $builder->where('title', 'like', '%' . $search . '%');
        });
        $builder->when(isset($filters['category']) ? $filters['category'] : false, function ($builder, $category) {
            $builder->whereHas('category', fn($builder) => $builder->where('slug', $category));
        });
        $builder->when(isset($filters['author']) ? $filters['author'] : false, function ($builder, $author) {
            $builder->whereHas('author', fn($builder) => $builder->where('username', $author));
        });
    }
}
