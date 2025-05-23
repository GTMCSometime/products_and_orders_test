 @extends('product.layouts.main')
 @section('content')  
 <table class="table">
 <thead>
   <tr>
     <th>ID</th>
     <th>Название</th>
     <th>Категория</th>
     <th>Описание</th>
     <th>Цена</th>
     <th colspan="3" class="text-center">Действия</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td>{{ $product->id}}</td>
     <td>{{ $product->name}}</td>
     <td>{{ $product->category_id}}</td>
     <td>{{ $product->description}}</td>
     <td>{{ $product->price}}</td>
     <td><a href="{{ route('products.edit', $product->id) }}"><button class="btn btn-primary">Редактировать</button></td></a>
     <td>
      <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
      <button class="btn btn-danger">Удалить</button>
      </form>
    </td>
   </tr>
 </tbody>
</table>
      <div class="mb-2">
      <a href="{{ route('products.index') }}"><button class="btn btn-primary">Назад</button></a>
      </div>
      @endsection  
