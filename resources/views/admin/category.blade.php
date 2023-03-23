@extends('admin.home')

@section('content')

<div class="content-wrapper">
    <div class="div_center">
        <h2 class="h2_font">Add Category</h2>

        <form action="">
            <input type="text" name="name" placeholder="write category name">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
        </form>
    </div>
</div>

@endsection
