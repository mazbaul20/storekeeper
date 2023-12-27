@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <h1 class="text-center">Transactions</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Product Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Total Price</th>
        <th scope="col">Date/Time</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transactions as $transaction)
        <tr>
          <th scope="row">{{ $transaction->id }}</th>
          <td>{{ $transaction->customer_name }}</td>
          <td>{{ $transaction->product_id }}</td>
          <td>{{ $transaction->product_name }}</td>
          <td>{{ $transaction->quantity }}</td>
          <td>{{ $transaction->unit_price }}</td>
          <td>{{ $transaction->total_price }}</td>
          <td>{{ $transaction->created_at }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection