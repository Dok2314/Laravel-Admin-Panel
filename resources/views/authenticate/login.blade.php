<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<h1 style="text-align:center;">Вход</h1>
<div class="container-fluid">
        <div class="row">
            <form action="{{route('user.login')}}" method="POST" class="form-control">
                @csrf
                <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" name="name" id="name" placeholder="Ваше Имя" value="{{old('name')}}" class="form-control">
                </div>
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="E-mail" value="{{old('email')}}" class="form-control">
                </div>
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Пароль" value="{{old('password')}}" class="form-control">
                </div>
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <br>
                <button type="submit" class="btn btn-success">Войти</button>
            </form>
        </div>
    </div>
</body>
</html>