<!-- @method を使用する場合 -->
<form action="/writer_delete/{{ $writer->id }}" method="delete">
    @csrf
    @method('delete')
    <input type="submit" value="delete">
</form>
