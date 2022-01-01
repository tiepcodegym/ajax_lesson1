<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="authors/create">Them Moi</a>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->country}}</td>
            <td><a href="authors/{{$author->id}}/detail">Detail</a></td>
            <td><a href="authors/{{$author->id}}">Delete</a></td>
            <td><a href="authors/{{$author->id}}/update">Update</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>
