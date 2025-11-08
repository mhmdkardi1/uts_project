<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        [
            "slug" => "universitas-bumigora",
            "title" => "Universitas Bumigora",
            "body" => "Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangkan kejuaraan komputer di daerah NTB 🥇",
            "img" => "https://www.universitasbumigora.ac.id/wp-content/uploads/2023/04/gedung-rektorat-baru-ubg.jpg"
        ],
        [
            "slug" => "universitas-mataram",
            "title" => "Universitas Mataram",
            "body" => "Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas pendidikan yang signifikan. 🧠",
            "img" => "https://pmb.unram.ac.id/wp-content/uploads/2020/01/REKTORAT-UNRAM.jpg"
        ],
        [
            "slug" => "uin-mataram",
            "title" => "UIN (State Islamic University of Mataram)",
            "body" => "Perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada sejumlah disiplin ilmu pengetahuan.",
            "img" => "https://uinmataram.ac.id/wp-content/uploads/2023/06/uin-mataram-1.jpg"
        ],
    ];

    public function index()
    {
        $posts = $this->posts;
        return view('post', compact('posts'));
    }

    public function show($slug)
    {
        $post = collect($this->posts)->firstWhere('slug', $slug);
        return view('singlepost', compact('post'));
    }
}
