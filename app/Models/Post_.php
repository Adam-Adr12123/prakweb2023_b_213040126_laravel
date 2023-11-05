<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quam ut unde neque vel quidem iste placeat, provident praesentium maiores! Tempore, expedita voluptas fugit tenetur quidem dolore magnam rerum sapiente ut optio eveniet laboriosam officia enim nihil distinctio! Animi minus sunt molestias qui iusto eligendi doloribus fuga aliquam necessitatibus cum labore placeat accusamus sed consequuntur harum eum, voluptatibus quo et vel officia laboriosam quam dolor voluptatum! Laboriosam eveniet reiciendis dolore, magni odio necessitatibus non praesentium vitae sed autem temporibus distinctio!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-slug-kedua",
            "author" => "Adre",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quam ut unde neque vel quidem iste placeat, provident praesentium maiores! Tempore, expedita voluptas fugit tenetur quidem dolore magnam rerum sapiente ut optio eveniet laboriosam officia enim nihil distinctio! Animi minus sunt molestias qui iusto eligendi doloribus fuga aliquam necessitatibus cum labore placeat accusamus sed consequuntur harum eum, voluptatibus quo et vel officia laboriosam quam dolor voluptatum! Laboriosam eveniet reiciendis dolore, magni odio necessitatibus non praesentium vitae sed autem temporibus distinctio!"
        
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
       
        return $posts->firstWhere('slug',$slug);
    }
}
