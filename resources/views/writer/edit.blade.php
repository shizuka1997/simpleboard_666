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
        <textarea class="form-control" name="w_n">{{ old('name') == '' ? $ws->name : old('name') }}</textarea>
    </div>

    <div class="form-group">
        <label for="w_2">住所</label>
        <textarea class="form-control" name="w_a">{{ old('address') == '' ? $ws->address : old('address') }}</textarea>
    </div>

    <div class="form-group">
        <label for="w_3">電話番号</label>
        <textarea class="form-control" name="w_t">{{ old('tel') == '' ? $ws->tel : old('tel') }}</textarea>
    </div>

    <button type="submit" class="btn btn-outline-primary">編集</button>
</form>

<a href="/writer/{{ $ws->id }}">確認</a> | 
<a href="/writer">戻る</a>

@endsection
