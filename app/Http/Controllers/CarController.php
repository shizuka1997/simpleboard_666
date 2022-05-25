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
    // ＴＯＰページの表示
    public function index()
    {
        $car = Car::all();

        return view('car.index', compact('car'));

        // $out = [];
        // $out['title'] = 'タイトル';
        // $out['type01'] = 'タイプ１';
        // $out['type02'] = 'タイプ２';
        // $out['type03'] = 'タイプ３';

        // return view('car.index', $out);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 新規投稿 作成画面 の表示
    public function create()
    {
        return view('car/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 新規投稿の保存
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);
       
        $car = new Car();
        $car->title = $request->input('title');
        $car->content = $request->input('content');
        $car->save();

        return redirect()->route('car.show', ['id' => $car->id])->with('message', 'Car was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // 個別の投稿ページの表示
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
    // 投稿編集 画面の表示
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
    // 投稿の更新を保存
    public function update(Request $request, Car $car)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);
       
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
    // 投稿を削除
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index');
    }
}
