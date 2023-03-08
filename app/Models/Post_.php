<?php

namespace App\Models;

class Post
{
    // use HasFactory;

    //biar bisa diakses
    //untuk di akses oleh class ini
    private static $blog = [
        [
            "title" => "Programing",
            "slug" => "judul-post-programing",
            "author" => "Yanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat asperiores quos nihil debitis. Dolorum velit voluptatibus, ipsum ducimus excepturi repellendus quas vero. Consequatur dignissimos est ut eaque doloribus at."
        ],
        [
            "title" => "Network",
            "slug" => "judul-post-network",
            "author" => "Yanti",
             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat asperiores quos nihil debitis. Dolorum velit voluptatibus, ipsum ducimus excepturi repellendus quas vero. Consequatur dignissimos est ut eaque doloribus at."
        ],
        [
            "title" => "Lain-Lain",
            "slug" => "judul-post-lain",
            "author" => "Yantu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat asperiores quos nihil debitis. Dolorum velit voluptatibus, ipsum ducimus excepturi repellendus quas vero. Consequatur dignissimos est ut eaque doloribus at."
        ],
    ];

    //membuat function all
    public static function all()
    {
        //object orienta porpeti biasa
        // return $this->$blog;
        // popertis static

        //colection = pembungkus dalam sebuah array
        return collect(self::$blog);
    }

    public static function find($slug)
    {
        $post =  static::all();

        return $post->firstWhere('slug', $slug);
    }
}
