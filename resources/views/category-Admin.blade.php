@extends('layouts.app')

@section('content')

@section('content')


    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success text-center">
                {{ $message }}
            </div>
        @endif


        <h1 class="text-center">All Categories</h1>
        <a class="btn btn-success" href="{{ route('categoryAdmin.create') }}">Add a Category</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm float-end"> Go Back</a>
        <br><br>

        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Category Name</th>
                <th>Room Category</th>
                <th>Image</th>
                <th></th>
                
            </thead>
            <tbody>





                @foreach ($categories as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->cat_name }}</td>

                        <td><img width="50px" height="50px" src="{{ asset('images/' . $row->cat_img) }}"></td>
                        <td><a href="{{ route('categoryAdmin.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                        <form class="float-end" method="post" action="{{ route('categoryAdmin.destroy', $row->id) }}">
                            @csrf
                            @method('DELETE')
                            <td><input onclick="return confirm('Are you sure you want to delete this Category?')" type="submit"
                                    class="btn btn-danger btn-sm" value="Delete" /></td>
                        </form>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>







@endsection
