<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon super 1er titre',
            'Mon super 2nd titre'
        ];

        return view('articles', [
            'posts' => $posts
        ]);
    }
}
