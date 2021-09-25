<?php
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;
$total = 0;

if(Session::has('user')){
  $total = CartController::cartItem();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Магазин</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="#" class="nav-link">О Нас</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Обратная Связь</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Корзина[{{$total}}]</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      </ul>
    </header>
  </div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Автор</th>
      <th scope="col">Статья</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
      <tr>
      <td>{{$article->id}}</td>
      <td>{{$article->email}}</td>
      <td>{{$article->message}}</td>
      </tr>
      @endforeach
  </tbody>
</table>
        </div>
        <div class="col-lg-8">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Название Товара</th>
      <th scope="col">Изображение</th>
      <th scope="col">Цена</th>
      <th scope="col">Описание</th>
      <th scope="col">Перейти</th>  
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
      <td><a href="{{route('getProduct',$good->id)}}"><button class="btn btn-info">Перейти</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>