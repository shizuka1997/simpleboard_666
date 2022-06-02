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
     * 投稿編集 画面の表示
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Writer $ws)
    {
         return view('writer.edit', compact('ws'));
    }

    /**
     * 投稿の更新を保存
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writer $ws)
    {
        $request->validate([
            'w_n' => 'required',
            'w_a' => 'required',
            'w_t' => 'required',
        ]);
       
        $writer->name = $request->input('name');
        $writer->address = $request->input('address');
        $writer->tel = $request->input('tel');
        $writer->save();

        return redirect()->route('writer.show', ['id' => $ws->id])->with('message', 'Writer was successfully updated.');
    }

        /**
     * ライターの削除
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete(Writer $writer)
    {
        $writer->delete();
        return redirect()->route('writer.index');
    }

}

