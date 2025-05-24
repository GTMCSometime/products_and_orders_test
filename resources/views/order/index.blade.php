@extends('order.layouts.main')
@section('content')
       <div class="col-6">
       <table class="table">
 <thead>
   <tr>
     <th>ФИО заказчика</th>
     <th>Дата создания</th>
     <th>Статус</th>
     <th colspan="3" class="text-center">Действия</th>
   </tr>
 </thead>
 <tbody>
   @foreach ($orders as $order)
   <tr>
     <td>{{ $order->customer_name}}</td>
     <td>{{ $order->created_at}}</td>
     <td>{{ $order->status}}</td>
     <td><a href="{{ route('orders.show', $order->id) }}"><button class="btn btn-success">Просмотр</button></td></a>
     <td><a href="{{ route('orders.edit', $order->id) }}"><button class="btn btn-primary">Редактировать</button></td></a>
     <td>
      <form action="{{ route('orders.destroy', $order->id) }}" method="post">
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