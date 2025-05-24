@extends('order.layouts.main')
 @section('content')  
      <form action="{{ route('orders.store') }}" method="post">
        @csrf
        <h4>Оформить заказ</h4>
<div class="mb-2">
  <input type="text" name="customer_name" class="form-control" placeholder="ФИО" value="{{ old('customer_name') }}" required>
</div>
<div class="mb-2">
<textarea name="customer_comment" class="form-control" placeholder="Комментарий к заказу" required>{{ old('customer_comment') }}</textarea>
</div>
<div class="mb-2">
<select class="form-select" name="product_id" required>
    <option value="" disabled selected>Выберите товар</option>
    @foreach ($products as $product)
        <option value="{{ $product->id }}" 
    {{ old('product_id') == $product->id ? 'selected' : '' }}>
    {{ $product->name }}
</option>
    @endforeach
</select>
</div>
<div class="mb-2">
  <input type="number" name="product_count" class="form-control" placeholder="Количество" step="1" value="{{ old('product_count') }}" required>
</div>
<button type="submit" class="btn btn-success">Создать</button>
      </form>
      <div class="mt-2">
      <a href="{{ route('orders.index') }}"><button class="btn btn-primary">Назад</button></a>
    </div>
      @endsection  
