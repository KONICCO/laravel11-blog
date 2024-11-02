<?php 


namespace App\Models;


use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public static function find($slug): array 
    {
        // bentuk lain
        // return Arr::first(static::all(), function ($value) use ($slug) {
        //     return $value['slug'] == $slug;
        // });
        // return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        $item = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$item) {
           abort(404);
        };

        return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    }
}
?>
