<?php

namespace App\Http\Controllers;

use App\Post;
use Facade\FlareClient\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy("fecha_de_creacion", "DESC")->limit(50)->select("id", "titulo", "imagen", "categoria", "fecha_de_creacion")->get();
        return view("post.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $campos = request()->validate([
            "titulo" => "required",
            "categoria" => "required",
            "contenido" => "required",
            "fecha_de_creacion" => "required|date"
        ]);
        Post::create($campos);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where("id", $id)->get();
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where("id", $id)->get();
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $campos = request()->validate([
            "titulo" => "required",
            "categoria" => "required",
            "contenido" => "required",
            "fecha_de_creacion" => "required|date"
        ]);
        Post::where("id", $id)->update(array("titulo" => $campos["titulo"], "contenido" => $campos["contenido"]));
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return $this->index();
    }
}
