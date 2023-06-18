<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $data=[
            ['name'=>'Samsung NOTE 10+', 'price'=>'130,000'],
            ['name'=>'Samsung S9+', 'price'=>'60,000'],
            ['name'=>'Samsung S7', 'price'=>'28,000'],
            ['name'=>'Samsung NOTE 22 5G', 'price'=>'222,000'],
        ];
        return view('posts.post')->with('d',$data);
    }
    public function card()
    {

        return view('cards.card');
    }
}
