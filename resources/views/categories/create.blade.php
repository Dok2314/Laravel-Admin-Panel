<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категория</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Создать Категорию</h1>
    <div class="container-fluid">
        <div class="row">
            <form action="" method="POST" class="form-control">
                @csrf
                <div class="form-group">
                    <label for="title">Название Категории</label>
                    <input type="text" name="title" id="title" placeholder="Категория" class="form-control">
                </div>  
                @error('title')<div class="alert alert-danger">{{$message}}</div>@enderror
                <br>
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>
        </div>
    </div>

</body>
</html>