@extends('layouts.app')
@section('content')



 <div class="container">
	<div class="row">
	<div class="error404">
                <h1><b class="text-danger">404</b> PAGE NOT FOUND</h1>
            <p>
                <b>You have wandered deep into the forest, click the button below to go back to safety</b>
            </p>
            <p><a href="{{asset('/')}}" class="btn btn-success"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Go back...</a>
            </p>
         </div>
     </div>
 </div>

@endsection