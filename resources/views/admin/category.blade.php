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


        <div class="div_center">
        <h2 class="h2_font">Add Category</h2>

        <form action="{{ url('/add_category') }}" method="POST">
            @csrf

            <input class="input_color" type="text" name="category" placeholder="write category name">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
        </form>
    </div>

   <div class="colors center">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
            <td>{{ $data->category_name }}</td>
            <td><a onclick="return confirm('Are you sure you want to Delete This?')" class="btn btn-danger" href="{{ url('delete_category', $data->id) }}">Delete</a></td>
          </tr>
            @endforeach

        </tbody>
      </table>
   </div>


@endsection
