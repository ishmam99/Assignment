@extends('app')
@section('content')
<style>
    .main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
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
    font-size: 17px;
}

    </style>
<div class="container">
    <div class="main">
        <div class="main-center">
        <h5>Sign up once and watch any of our free demos.</h5>
        <form class="" method="post" action="{{URL::to('store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email"/>
                    </div>
                </div>
                <div class="form-group">
                        <label for="name">Birth Date</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="date" class="form-control" name="birth_date" id="birth_date"  >
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="email">Salary</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="salary" placeholder="Salary"/>
                        </div>
                    </div>

               

        <button type="submit">SUBMIT</button>
                
            </form>
        </div><!--main-center"-->
    </div><!--main-->
</div><!--container-->
@endsection