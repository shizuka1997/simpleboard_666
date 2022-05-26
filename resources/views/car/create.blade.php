<form method="POST" action="/car">
    {{ csrf_field() }}
    <input type="text" name="type">
    <input type="text" name="color">
    <input type="submit">
</form>
