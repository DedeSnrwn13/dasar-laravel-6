<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengenal Validasi Form</title>
</head>
<body>
    <form action="{{ route('subscribe') }}" method="POST">
        @csrf

        <label for="">
            <input type="text" name="email" id="">
        </label>
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @endif
        <input type="submit" value="Subscribe">
    </form>
</body>
</html>
