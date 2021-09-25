<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Товар {{$good->title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="form-control">
                <div class="alert alert-info">
                    <h1 style="text-align:center;">{{$good->title}}</h1>
                    <p><img src="/images/{{$good->img}}" alt="" width="600px" height="400px"></p>
                    <p style="position:absolute; left:850px; bottom:430px; color:black; font-size:20px;">{{$good->description}}</p>
                    <h4>{{$good->price}}$</h4>
                    <form action="/add-to-cart" method="POST">
                        @csrf
                        <input type="hidden" name="good_id" value="{{$good->id}}">
                    <button class="btn btn-primary">Добавить в корзину</button>
                    <button class="btn btn-success">Купить Сейчас</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
 
    <script>
        $(document).ready(function () {
            $('.cart_button').click(function (event) {
                event.preventDefault()
                addToCart()
            })
        })
        function addToCart() {
            let id = $('.details_name').data('id')
            let qty = parseInt($('#quantity_input').val())
            let total_qty = parseInt($('.cart-qty').text())
            total_qty += qty
            $('.cart-qty').text(total_qty)
            $.ajax({
                url: "{{route('addToCart')}}",
                type: "POST",
                data: {
                    id: id,
                    qty: qty,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    console.log(data)
                },
                error: function(data){
                }
            });
        }
    </script>
</body>
</html>