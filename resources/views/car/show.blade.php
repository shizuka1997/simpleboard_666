@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $car->title }}
    {{ $car->content }} 

    <a href="/car/{{ $car->id }}/edit">Edit</a>
    