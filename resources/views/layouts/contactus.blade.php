@extends('layouts.app')
@section('content')

<!--<pre>-->
<?php //print_r($data) ?>
<!--</pre>-->

<div class="container-fliud course-lessions">
	<div class="container">
        <div class="row">
            <h1>Contact Us</h1>
        </div>
      </div>
</div>

<div class="container-fliud">
	<div class="container">
        <div class="row">
            <div class="col-md-7">
            	<div class="k-main-content">
            		<!--<h1 class="hone">Coming Soon</h1>-->
                    <form role="form" method="POST">
                        <div class="form-group">
                            <label for="email">Full Name :</label>
                                <input class="form-control" name="name" type="text" />
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Email :</label>
                                    <input class="form-control" name="email" type="text" />    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Phone :</label>
                                    <input class="form-control" name="lastname" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                           		<label for="lastname">Comment :</label>
                            	<textarea class="form-control input-lg"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <input class="tg-btn" name="login" value="Submit" type="submit" />
                        </div>
                    </form>                  
                </div>
            </div>
            
            <div class="col-md-4 col-xs-offset-1">
            	<div class="row">
                	<div class="col-sm-2">
                    	<i class="fa fa-building fa-4x fa-style"></i>
                    </div>
                    <div class="col-sm-10">
                         <h5><b>Contact Addres:</b></h5>
                         <p> 3rd Floor, Engineering Building, 1, Engineering Close, NEC Building,Off Idowu Taylor Street,
                         Victoria Island, Lagos, Nigeria.</p>
                	</div>
                    
                	<div class="col-sm-2">
                    	<i class="fa fa-envelope fa-4x fa-style"></i>
                    </div>
                    <div class="col-sm-10">
                     	<h5><b>Email:</b></h5>
                     	<p>info@icancertifications.com</p>
                    </div>
                   
					<div class="clearfix"></div>
                    
                    <div class="col-sm-2">
                    	<i class="fa fa-phone fa-4x fa-style"></i>
                    </div>
                    <div class="col-sm-10">
                     	<h5><b>Phone:</b></h5>
                     	<p>(+234)-1-013429741, (+234)-1-013429741</p>
                    </div>
                    
                    
                   
                </div>
            </div>
            
            
            
        </div>
    </div>
</div>       

@include('text_slider') 
       
        
@endsection