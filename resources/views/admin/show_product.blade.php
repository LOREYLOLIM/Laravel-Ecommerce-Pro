
@extends('admin.home')

@section('content')

{{--  message  --}}
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session()->get('message') }}

</div>
@endif

{{-- end message  --}}

<div class="colors">
  <div class="div_center">
    <h1 class=" h2_font">All Products</h1>

    <div class="colors center">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Product Title</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Discount Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($product as $product)
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount_price }}</td>
                    <td>
                        <img class="img_size" src="/product/{{ $product->image }}">
                    </td>
                <td><a onclick="return confirm('Are you sure you want to Delete This?')" class="btn btn-danger" href="">Delete</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
  </div>
</div>
@endsection
