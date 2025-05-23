@extends('product.layouts.main')
@section('content')
<div><button><a href="{{ route('products.create') }}">Добавить товар</a></button></div>
       <div class="col-6">
       <table class="table">
 <thead>
   <tr>
     <th>ID</th>
     <th>Название</th>
     <th>Категория</th>
     <th>Цена</th>
     <th colspan="3" class="text-center">Действия</th>
   </tr>
 </thead>
 <tbody>
   @foreach ($products as $product)
   <tr>
     <td>{{ $product->id}}</td>
     <td>{{ $product->name}}</td>
     <td>{{ $product->category->name}}</td>
     <td>{{ $product->price}}</td>
     <td><a href="{{ route('products.show', $product->id) }}"><button class="btn btn-success">Просмотр</button></td></a>
     <td><a href="{{ route('products.edit', $product->id) }}"><button class="btn btn-primary">Редактировать</button></td></a>
     <td>
      <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
      <button class="btn btn-danger">Удалить</button>
      </form>
    </td>
     @endforeach
   </tr>
 </tbody>
</table>
@endsection