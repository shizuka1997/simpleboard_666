<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;

class WriterController extends Controller
{
    /**
     * ＴＯＰページの表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ws = Writer::all();

        return view('writer.index', compact('ws'));

    }

    /**
     * ライター新規登録の初期表示
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('writer.create');
    }

    /**
     * ライターの新規登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $request->validate([
            'w_n' => 'required',
            'w_a' => 'required',
            'w_t' => 'required',
        ]);
       
        $writer = new Writer();
        $writer->w_name = $request->input('w_n');
        $writer->w_address = $request->input('w_a');
        $writer->w_tel = $request->input('w_t');
        $writer->save();

        return redirect()->route('writer.index')->with('message', '登録しました。');
    }

    /**
     * ライターの編集
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Writer $writer)
    {
        return view('writer.edit', compact('writer'));
    }

}

