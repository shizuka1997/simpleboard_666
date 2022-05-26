<h1>Car</h1>

 @foreach($car as $car)
    <a href="/car/{{ $car->id }}">{{ $car->type }}</a>
    <a href="/car/{{ $car->id }}/edit">Edit</a>

    <form action="/car/{{ $car->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>

@endforeach

<a href="/car/create">New Car</a>
