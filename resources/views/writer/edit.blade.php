@extends('layouts.layouts')

@section('title', 'ライター登録内容の編集')

@section('content')

<h1>ライター登録内容の編集</h1>

@if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
@endif

<form action="/writer_update/{{ $ws->id }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="w_1">ライター名</label>
        <input type="text" class="form-control" name="w_n" value="{{old('w_name')}}">
    </div>
    <div class="form-group">
        <label for="w_2">住所</label>
        <input type="text" class="form-control" name="w_a" value="{{old('w_address')}}">
    </div>
    <div class="form-group">
        <label for="w_3">電話番号</label>
        <input type="text" class="form-control" name="w_t" value="{{old('w_tel')}}">
    </div>

    <button type="submit" class="btn btn-outline-primary">編集</button>
</form>

<a href="/writer/{{ $ws->id }}">確認</a> | 
<a href="/writer">戻る</a>

@endsection