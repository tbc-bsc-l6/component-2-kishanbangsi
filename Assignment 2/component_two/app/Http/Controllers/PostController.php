<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                "title" => "Learning Laravel",
                "body" => "I am learning Laravel. It is so cool."
            ],
            [
                "title" => "Laravel is easy",
                "body" => "Laravel is beginner friendly. You'll love it."
            ]
        ];

        return view('index', [ 'posts' => $posts ]);
    }

    public function post($id)
    {
        $posts = [
            [
                "id" => 1,
                "title" => "Learning Laravel",
                "body" => "I am learning Laravel. It is so cool."
            ],
            [
                "id" => 2,
                "title" => "Laravel is easy",
                "body" => "Laravel is beginner friendly. You'll love it."
            ]
        ];

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return view('post', ['post' => $post]);
            }
        }
    }
}