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
    <h1 class=" h2_font">Add Products</h1>
<form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="div_design">
        <label for="">Product Title</label>
    <input class="input_color" type="text" name="title" placeholder="Write a title" required>
    </div>

    <div class="div_design">
        <label for="">Product Description</label>
    <input class="input_color" type="text" name="description" placeholder="Write a description" required>
    </div>
    <div class="div_design">
        <label for="">Product Price</label>
    <input class="input_color" type="number" name="price" placeholder="Write a price" required>
    </div>
    <div class="div_design">
        <label for="">Discount Price</label>
    <input class="input_color" type="number" name="dis_price" placeholder="Write a Discount Price">
    </div>
    <div class="div_design">
        <label for="">Product Quantity</label>
    <input class="input_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required>
    </div>

    <div class="div_design">
        <label for="">Product Category</label>
        <select name="category" id="" class="input_color" required>
            <option value="" selected="">Add Category Here</option>
            @foreach ($category as $category)
            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>

            @endforeach
        </select>
    </div>
    <div class="div_design">
        <label for="">Product Image</label>
    <input class="input_color" type="file" name="image" placeholder="Upload Image" required>
    </div>
    <div class="div_design">
    <input class="btn btn-primary" type="submit" value="Add Product">
    </div>
</form>
  </div>
</div>
@endsection
