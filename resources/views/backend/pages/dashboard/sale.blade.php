@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <div style="width: 500px; margin:0px auto;">
    <h1 class="text-center">Sale Product</h1>
    <form action="{{ route('sale.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="customerName" class="form-label">Customer Name</label>
          <input type="text" name="customer_name" class="form-control" id="customerName" placeholder="customer name" required>
        </div>
        <div class="mb-3">
          <label for="productName" class="form-label">Product Name</label>
          <select name="product_id" class="form-select" aria-label="Default select example" required>
              <option disabled selected>Select a Product name</option>
              @foreach ($products as $item)
                  <option value="{{ $item->id }}">{{$item->product_name}}</option>
              @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="productQuantity" class="form-label">Product Quantity</label>
          <input type="number" name="quantity" class="form-control" name="quantity" id="productQuantity" placeholder="Product Quantity" required>
        </div>
        <button class="btn btn-primary">Sale</button>
    </form>
  </div>
@endsection