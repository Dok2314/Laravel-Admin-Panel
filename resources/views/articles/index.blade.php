<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание Статьи</title>
    <script src="sweetalert2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <form action="" method="POST" class="form-control">
                    @csrf
                    <div class="form-group">
                        <label for="title">Название Статьи</label>
                        <input type="text" name="title" id="title" placeholder="Название" class="form-control">
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="email">Ваш E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="message">Статья:</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Статья" class="form-control"></textarea>
                    </div>
                    @error('message')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-success">Создать</button>
                </form> 
        </div>
    </div>
    
</body>
</html>