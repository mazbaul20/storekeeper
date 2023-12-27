@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <div class="positon-relative">
    <div class="d-flex">
      <h1>Product Data</h1>
      <div class="position-absolute end-0 me-4">
        <a class="btn btn-primary" href="{{ route('product.create.page') }}">Create</a>
      </div>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Product Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->product_name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->price }}</td>
          <td class="px-6 py-4 text-right">
            <a href="{{ route('product.edit.page',$item->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection