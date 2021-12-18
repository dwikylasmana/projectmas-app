<?php

namespace App\Models;


class News
{
    private static $newslist = [
        [
            "title"=>"Berita 2",
            "slug"=>"berita-1",
            "author"=>"Dwiky Lasmana",
            "date"=>"1 December 2021",
            "content"=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptatum possimus dolorum vel accusamus. Animi, sapiente. Reprehenderit laborum quidem modi odio tempora rem assumenda dolore deserunt est. Vel, tenetur veniam."
        ],
        [
            "title"=>"Berita 2",
            "slug"=>"berita-2",
            "author"=>"Dwiky Lasmana",
            "date"=>"2 December 2021",
            "content"=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam laudantium reiciendis veniam, labore impedit non veritatis ullam dolorem vitae voluptate?"
        ],
        [
            "title"=>"Berita 3",
            "slug"=>"berita-2",
            "author"=>"Dwiky Lasmana",
            "date"=>"2 December 2021",
            "content"=>"    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, non. Excepturi doloremque fugit consequatur nobis placeat dicta voluptatibus quidem doloribus atque labore maxime magni, quam eos porro. Nulla cum error porro, quo quas ipsa. Cum odit, doloremque aperiam sit enim id pariatur odio doloribus fugiat labore, harum placeat itaque molestias obcaecati, aut ex voluptatibus nulla et neque asperiores officia eaque."
        ]
    ];

    public static function all(){
        return collect(self::$newslist);
    }

    public static function find($slug){
        $single_news = static::all();
        return $single_news->firstWhere('slug',$slug);
    }

}
