<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;

    //biar bisa diakses
    //untuk di akses oleh class ini
    private static $blog = [
        [
            "title" => "judul",
            "slug" => "slug",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat asperiores quos nihil debitis. Dolorum velit voluptatibus, ipsum ducimus excepturi repellendus quas vero. Consequatur dignissimos est ut eaque doloribus at."
        ],
        [
            "title" => "judul",
            "slug" => "slug",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat asperiores quos nihil debitis. Dolorum velit voluptatibus, ipsum ducimus excepturi repellendus quas vero. Consequatur dignissimos est ut eaque doloribus at."
        ],
        [
            "title" => "judul",
            "slug" => "slug",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat asperiores quos nihil debitis. Dolorum velit voluptatibus, ipsum ducimus excepturi repellendus quas vero. Consequatur dignissimos est ut eaque doloribus at."
        ],
    ];

    //membuat function all
    public static function all()
    {
        //object orienta porpeti biasa
        // return $this->$blog;
        // popertis static
        return self::$blog;
    }
}
