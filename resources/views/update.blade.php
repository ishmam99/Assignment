@extends('app')
@section('content')
<style>
    body{
        background-color:  #a4d2df ;
    }
    .main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 15px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 10px;
 	margin: 0 auto;
 	max-width: 600px;
    
    padding: 10px 40px;
	background:#009edf;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 22px;
}

    </style>
<!-- Button trigger modal -->


<div class="container">
    
    <div class="main">
        <div class="main-center">
       <h2>Edit Employee Details</h2>
        <form class="" method="post" action="{{URL::to('update',$employee->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="name" id="name" value="{{$employee->name}}" placeholder="Enter your Name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" name="email" value="{{$employee->email}}" placeholder="Enter your Email"/>
                    </div>
                </div>
                <div class="form-group">
                        <label for="name">Birth Date</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="date" class="form-control" name="birth_date" id="birth_date" value="{{$employee->birth_date}}"  >
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="email">Salary</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="salary"  value="{{$employee->salary}}"/>
                        </div>
                    </div>

               

        <button type="submit">SUBMIT</button>
                
            </form>
        </div><!--main-center"-->
    </div><!--main-->
</div><!--container-->
@endsection