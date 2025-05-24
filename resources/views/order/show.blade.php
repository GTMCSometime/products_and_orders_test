 @extends('order.layouts.main')
 @section('content')  
 <table class="table">
 <thead>
   <tr>
     <th>ID</th>
     <th>ФИО заказчика</th>
     <th>Товар</th>
     <th>Кол-во товара</th>
     <th>Дата создания</th>
     <th>Статус</th>
     <th>Комментарий заказчика</th>
     <th>Стоимость</th>
     <th colspan="3" class="text-center">Действия</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td>{{ $order->id}}</td>
     <td>{{ $order->customer_name}}</td>
     <td>{{ $order->product->name}}</td>
     <td>{{ $order->product_count}}</td>
     <td>{{ $order->created_at}}</td>
     <td>{{ $order->status}}</td>
     <td>{{ $order->customer_comment}}</td>
     <td>{{ $order->total_price}}</td>
     <td><a href="{{ route('orders.edit', $order->id) }}"><button class="btn btn-primary">Редактировать</button></td></a>
     <td>
     <form action="{{ route('orders.complete', $order->id) }}" method="post">
        @csrf 
        @method('patch')
        <button class="btn btn-dark">Изменить статус</button></td>
        </form>
     <td>
      <form action="{{ route('orders.destroy', $order->id) }}" method="post">
        @csrf
        @method('DELETE')
      <button class="btn btn-danger">Удалить</button>
      </form>
    </td>
   </tr>
 </tbody>
</table>
      <div class="mb-2">
      <a href="{{ route('orders.index') }}"><button class="btn btn-primary">Назад</button></a>
      </div>
      @endsection  
