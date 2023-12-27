@extends('backend.layout.app')
@section('content')
  <!--start breadcrumb-->
  <h1 class="text-center">Product Create</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="{{ route('product.update',$products->id) }}" method="post">
      @csrf
      @method('post')
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="product_name" id="productName" value="{{ $products->product_name}}" required>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Product Price</label>
        <input type="number" class="form-control" name="price" id="productPrice" value="{{ $products->price}}" required>
      </div>
      <div class="mb-3">
        <label for="productQuantity" class="form-label">Product Quantity</label>
        <input type="number" class="form-control" name="quantity" id="productQuantity" value="{{ $products->quantity}}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection