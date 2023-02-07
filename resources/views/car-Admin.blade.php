@extends('layouts.app')

@extends('layouts.nav')

@section('content')


    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success text-center">
                {{ $message }}
            </div>
        @endif


        <h1 class="text-center">All car</h1>
        <a class="btn btn-success" href="{{ route('admin.carAdmin.create') }}">Add a car</a>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-sm float-end"> Go Back</a>
        <br><br>

        <table class="table table-striped">
            <thead>
                <th>car Number</th>
                <th>Number of Beds</th>
                <th>car Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Description</th>
                <th>Image</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>



                {{-- {{$categories}}
{{$car}} --}}


                @foreach ($car as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->num_of_car }}</td>
                        <td>{{ $row->cat_name }}</td>
                        <td>{{ $row->car_price }} $</td>
                        <td>
                            @if ($row->status == 1)
                                {{ 'Avillable' }}
                            @else
                                {{ 'Bocked' }}
                            @endif
                        </td>

                        <td>{{ $row->car_description }}</td>

                        <td><img width="50px" height="50px" src="{{ asset('images/' . $row->car_image) }}"></td>
                        <td><a href="{{ route('admin.carAdmin.edit', $row->id) }}"
                                class="btn btn-warning btn-sm">Edit</a></td>
                        <form class="float-end" method="post" action="{{ route('admin.carAdmin.destroy', $row->id) }}">
                            @csrf
                            @method('DELETE')
                            <td><input onclick="return confirm('Are you sure you want to delete this car?')" type="submit"
                                    class="btn btn-danger btn-sm" value="Delete" /></td>
                        </form>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>







@endsection
