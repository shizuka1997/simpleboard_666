<!-- 投稿編集 画面の表示 -->

    <form method="POST" action="/car_update/{{ $car->id }}">
        {{ csrf_field() }}
        <!-- <input type="hidden" name="_method" value="PUT">-->
        <input type="text" name="type" value="{{ $car->type }}">
        <input type="text" name="color" value="{{ $car->color }}">
        <input type="submit">
    </form>
