<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengenal Validasi Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{ route('subscribe') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Masukkan email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>

            <input type="submit" class="btn btn-primary" value="Subscribe">
        </form>
    </div>
</body>
</html>
