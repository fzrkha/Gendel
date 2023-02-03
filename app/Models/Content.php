<?php

namespace App\Models;


class Content
{
    private static $isi_konten =  [
        [
            "title" => "Episode 1",
            "slug" => "eps-satu",
            "author" => "Kang Halu",
            "desc" => "Seorang Raja Iblis yang bereinkarnasi menjadi manusia biasa."
        ],
        [
            "title" => "Episode 2",
            "slug" => "eps-dua",
            "author" => "Kang Halu",
            "desc" => "Bagaimana kehidupan si Raja Iblis setelah bereinkarnasi menjadi manusia?"
        ]
        ];

    public static function all() {
        return self::$isi_konten;
    }
}
