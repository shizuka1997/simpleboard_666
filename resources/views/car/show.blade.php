<!-- 個別の投稿ページの表示 -->

    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $car->title }}
    {{ $car->content }} 

    <a href="/car/{{ $car->id }}/edit">Edit</a> | 
