@extends('product.layouts.main')
@section('content')
<div><button><a href="{{ route('products.create') }}">Добавить товар</a></button></div>
       <div class="col-6">
       <table class="table">
 <thead>
   <tr>
     <th>ID</th>
     <th>Название</th>
     <th colspan="3" class="text-center">Действия</th>
   </tr>
 </thead>
 <tbody>
   @foreach ($products as $product)
   <tr>
     <td>{{ $product->id}}</td>
     <td>{{ $product->name}}</td>
     <td><a href="{{ route('products.show', $product->id) }}"><button class="btn btn-success">Просмотр</button></td></a>
     <td><button class="btn btn-primary">Редактировать</button></td>
     <td><button class="btn btn-danger">Удалить</button></td>
     @endforeach
   </tr>
 </tbody>
</table>
@endsection