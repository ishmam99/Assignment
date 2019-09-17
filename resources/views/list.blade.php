@extends('app')
@section('content')
<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @elseif(session()->get('delete'))
    <div class="alert alert-danger">
            {{ session()->get('delete') }}  
          </div>
    @endif
  </div>
    <h2>List of Employees</h2>
    <table class="table">
        <thead class="thead-dark">
            <th>Name</th>
            <th>Email</th>
            <th>Date Of Birth</th>
            <th>Salary</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach ($employees as $e)
                <tr>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->birth_date}}</td>
                <td>{{$e->salary}}</td>
                <td><a href="{{URL::to('edit',$e->id)}}">Edit</a> || <a href="{{URL::to('delete',$e->id)}}">Delete</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection