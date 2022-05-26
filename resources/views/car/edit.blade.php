<!-- 投稿編集 画面の表示 -->

    <form method="POST" action="/car/{{ $car->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{ $car->type }}">
        <input type="text" name="content" value="{{ $car->color }}">
        <input type="submit">
    </form>
