<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perlindungan dari CSRF</title>
</head>
<body>
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf

        <input type="text" name="todo" id="">
        <input type="submit" value="Save">
    </form>
</body>
</html>
