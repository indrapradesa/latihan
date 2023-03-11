<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    // apa yang boleh di isi
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // apa yang tidak boleh di isi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //ternary operator to filter
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //    return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // null coalescing filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            // callback
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            // callback dengan melakukan join table category menggunakan wherehas
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        // arrow function
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
