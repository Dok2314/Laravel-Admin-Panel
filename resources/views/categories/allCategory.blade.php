<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все Статьи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
@include('session.success')
    <div class="container">
        <div class="row">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Категория</th>
      <th scope="col" style="padding-left:60px;">Действие</th>
    </tr>
  </thead>
  <tbody>
      @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->title}}</td>
      <td><a href="{{route('delete',$category->id)}}"><button class="btn btn-danger">Удалить</button></a>
      <a href="{{route('category',$category->id)}}"><button class="btn btn-primary">Редактировать</button></a>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</body>
</html>