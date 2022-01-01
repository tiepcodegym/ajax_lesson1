<form action="" method="post">
    @csrf
    <input name="name" value="{{$author->name}}">
    <input name="country" value="{{$author->country}}">
    <button type="submit">Cap Nhat</button>
</form>
