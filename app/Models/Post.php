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

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
