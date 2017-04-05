
@extends('layouts.app')
@section('content')
        <div class="security-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="{{asset('images/security.png')}}" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  <a href="{{url('/')}}">HOME</a> <i class="fa fa-arrows-h"></i> SECURITY
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4" style="height: 100vh;">
        <div class="container section4-bg">
          <div class="row" style="padding: 0 20px;">
            <div class="col-md-12 text-center">
              <h2>SECURITY FEATURES</h2>
            </div>




            <div class="col-md-12">
              After downloading the course and installing it on your computer, you will be required to enter a one-time activation product key (which would have been sent to your email) in order to be able to play the course.
              <br><br>
              You will require internet connection to activate the course. This course can only be installed and viewed on one computer at a time. If you ever have cause to reinstall the course on another computer, a new activation key will be sent to you. Contact us through the <a href="http://icandev.zercomsystems.com/index.php?ctg=contact" style="color:#000;"><strong>Contact Admin</strong></a> to obtain your new activation key. 
            </div>        
          </div>      

        </div>
      </div>

@endsection