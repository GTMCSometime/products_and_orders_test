 @extends('product.layouts.main')
 @section('content')  
      <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('patch')
        <h4>Редактировать товар</h4>
<div class="mb-2">
  <input type="text" name="name" class="form-control" placeholder="Название" value="{{ $product->name }}" required>
</div>
<div class="mb-2">
<textarea name="description" class="form-control" placeholder="Описание товара" required>{{ $product->description }}</textarea>
</div>
<div class="mb-2">
  <input type="number" name="price" class="form-control" placeholder="Цена" step="0.01" value="{{ $product->price }}" required>
</div>
<div class="mb-2">
<select class="form-select" name="category_id" required>
    <option value="" disabled selected>Выберите категорию</option>
    @foreach ($categories as $category)
    <option value="{{ $category->id }}"
      {{ $category->id == $product->category_id || old('category_id') == $category->id ? 'selected' : '' }}>
      {{ $category->name }}
  </option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Обновить</button>
<a href="{{ route('products.index') }}"><button class="btn btn-primary">Назад</button></a>
      </form>
      @endsection  
