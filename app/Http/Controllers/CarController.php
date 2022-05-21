<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $out = [];
        $out['title'] = 'タイトル';
        $out['type01'] = 'タイプ１';
        $out['type02'] = 'タイプ２';
        $out['type03'] = 'タイプ３';
        // $out['posts3'] = $posts;
        // $out['title'] = 'タイトル';
        // $out['name'] = '名前';
        // return view('posts_001.index', compact('posts2'));
        return view('car.index', $out);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
       
        $post = new Car();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('car.show', ['id' => $post->id])->with('message', 'Car was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
       
        $car->title = $request->input('title');
        $car->content = $request->input('content');
        $car->save();

        return redirect()->route('car.show', ['id' => $car->id])->with('message', 'Car was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index');
        // return redirect()->route('posts_0001');
        return redirect('car');
    }
}
