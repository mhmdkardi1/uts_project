<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $programmers = [
            [
                "name" => "Sukardi Alamsyah",
                "nim" => "2301010019",
                "desc" => "begandang is in my blood cause all the projects wont solve itself 😎",
                "img" => "https://i.pinimg.com/736x/16/1e/79/161e79176b768d65b6b70a0a8b6e5e1b.jpg"
            ],
            [
                "name" => "iMAM RRR",
                "nim" => "2301010021",
                "desc" => "professional front end designer",
                "img" => "https://i.pinimg.com/736x/2a/74/55/2a74555b89ee0997d21c394322a7bbf1.jpg"
            ]
        ];

        return view('home', compact('programmers'));
    }
}
