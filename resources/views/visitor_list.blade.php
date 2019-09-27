@extends('app')
@section('content')

    <h2>List of Visitors</h2>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            

        </thead>
        <tbody>
            @foreach ($visitors as $v)
                <tr>
                <td>{{$v->name}}</td>
                <td>{{$v->email}}</td>
                <td>{{$v->address}}</td>
                <td>{{$v->city}}</td>
                <td>{{$v->country}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection