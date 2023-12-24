@extends('layouts.app')

@section('content')



<div class="page-wrapper">
    <div class="create_content">

    <h2>Locations</h2>
    <a href="{{ route('locations.create') }}" class="btn btn-primary mb-3 float-start">Create Location</a>
   
    

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Rental Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
            <tr>
                <td>{{ $location->id }}</td>
                <td>{{ $location->name }}</td>
                <td>{{ $location->rental_price }}</td>
                <td>
                    <a href="{{ route('locations.show', $location->id) }}" class="btn btn-info">View</a>

                    <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary">Edit</a>

                    
                    <form action="{{ route('locations.destroy', $location->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
