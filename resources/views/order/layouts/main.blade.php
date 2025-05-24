<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row"><h6><p align="center">Заказы</p></h6></div>
<div class="mt-2"><button class="btn btn-link"><a href="{{ route('orders.create') }}">Создать заказ</a></button></div>
<div class="mt-2"><button class="btn btn-info"><a href="{{ route('products.index') }}">Товары</a></button></div>
<div class="mt-2">
@yield('content')
</div>
</body>
</html>