<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy("fecha_de_creacion", "DESC")->limit(10)->select("id", "titulo")->get();

        return view("Home", compact("posts"));
    }
}
