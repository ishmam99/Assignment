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
            <th>Delete</th>

        </thead>
        <tbody>
            @foreach ($employees as $e)
                <tr>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->birth_date}}</td>
                <td>{{$e->salary}}</td>
                <td><a href="{{URL::to('edit',$e->id)}}"><button class="btn btn-primary">Edit</button></a>
                <td data-toggle="modal" data-target="# {{ $e->id }} ">
                    <button type="button" class="btn btn-danger" >
                     Delete
                    </button> 
         <!-- Modal --> 
         <div class="modal fade" id=" {{ $e->id }} " role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                This Will Delete <strong> {{ $e->name }} </strong> From The List!  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                <a class="btn btn-primary" href="delete/{{ $e->id }}">Delete</a>
                  
           
              </div>
            </div>
          </div>
        </div> 
      
        
              </td>
      
      

 
    </tr>
    @endforeach
    
        
        </tbody>
    </table>
   

@endsection
