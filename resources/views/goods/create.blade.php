<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать Товар</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Создать Товар</h1>
    <div class="container-fluid">
        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data" class="form-control">
                @csrf
                <div class="form-group">
                    <label for="title">Название Товара</label>
                    <input type="text" name="title" id="title" placeholder="Название Товара" class="form-control">
                </div>
                @error('title') <div class="alert alert-danger">{{$message}}</div>@enderror
                <br>
                <div class="form-group">
                    <label for="category">Выберите Категорию Товара</label>
                    <select name="category_id" class="form-control">
                        @foreach($category as $cat)
                        <option value="{{$cat->id}}" selected>{{$cat->title}}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id') <div class="alert alert-danger">{{$message}}</div>@enderror
                <div class="form-group">
                    <label for="img"></label>
                    <input type="file" name="img" id="img" placeholder="" class="form-control" onchange="previewFile(this)">
                    <img id="previewImg" alt="image" style="max-width:250px; margin-top:20px;">
                </div>
                @error('img') <div class="alert alert-danger">{{$message}}</div>@enderror
                <div class="form-group">
                    <label for="price">Цена Товара</label>
                    <input type="text" name="price" id="price" placeholder="Цена Товара" class="form-control">
                </div>
                @error('price') <div class="alert alert-danger">{{$message}}</div>@enderror
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Описание Товара" class="form-control"></textarea>
                </div>
                @error('description') <div class="alert alert-danger">{{$message}}</div>@enderror
                <br>
                <button class="btn btn-success">Добавить Товар</button>
            </form>
        </div>
    </div>
    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>