 @extends('product.layouts.main')
 @section('content')  
      <form action="{{ route('products.store') }}" method="post">
        @csrf
        <h4>Создать товар</h4>
<div class="mb-2">
  <input type="text" name="name" class="form-control" placeholder="Название" value="{{ old('name') }}" required>
</div>
<div class="mb-2">
  <textarea name="description" class="form-control" placeholder="Описание товара" required>{{ old('description') }}
  </textarea>
</div>
<div class="mb-2">
  <input type="text" name="price" class="form-control" placeholder="Цена" value="{{ old('price') }}" required>
</div>
<div class="mb-2">
<select class="form-select" name="category_id" aria-label="Выберите категорию" required>
  <option selected>Выберите</option>
  @foreach ($categories as $category)
  <option value="{{ $category->id }}">{{ $category->name }}</option>
  @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Создать</button>
      </form>
      <div class="mb-2">
      <a href="{{ route('products.index') }}"><button class="btn btn-primary">Назад</button></a>
      </div>
      @endsection  
