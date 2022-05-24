<form method="POST" action="/car">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
</form>
