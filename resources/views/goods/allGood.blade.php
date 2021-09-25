<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все товары</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
@include('session.success')
    <h1>Все товары</h1>
    <div class="container">
        <div class="row">
           
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Название Товара</th>
      <th scope="col">Изображение</th>
      <th scope="col">Цена</th>
      <th scope="col">Описание</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
      @foreach($goods as $good)
    <tr>
      <th scope="row">{{$good->id}}</th>
      <td>{{$good->title}}</td>
      <td><img src="/images/{{$good->img}}" alt="" width="400px" height="200px"></td>
      <td>{{$good->price}}$</td>
      <td>{{$good->description}}</td>
      <td><a href="{{route('deleteGood',$good->id)}}"><button class="btn btn-danger">Удалить</button></a>
      <a href="{{route('editGood',$good->id)}}"><button class="btn btn-primary">Редактирование</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
          
        </div>
    </div>
</body>
</html>