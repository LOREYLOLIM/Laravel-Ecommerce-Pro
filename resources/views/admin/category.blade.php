@extends('admin.home')

@section('content')

<div class="content-wrapper">
    <div class="div_center">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('message') }}

        </div>
        @endif

        <h2 class="h2_font">Add Category</h2>

        <form action="{{ url('/add_category') }}" method="POST">
            @csrf

            <input class="input_color" type="text" name="category" placeholder="write category name">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
        </form>
    </div>
</div>

@endsection
