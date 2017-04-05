@extends('layouts.app')
@section('content')
        <div class="lost-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="images/lost.png" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  <a href="{{url('/')}}">HOME</a>
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4">
        <div class="container section4-bg">
          <div class="row" style="padding: 0 20px;">
            <div class="col-md-12 text-center">
              <div class="lost-num">
                404
              </div>
            </div>
            <div class="col-md-12">
              <div class="lost-image">
                <img src="images/losttable.png" alt="404">
              </div>
              <!-- <div class="lost-num">
                404
              </div> -->
              <div class="lost-head">
                Look's like you've got lost...
              </div>              
              <div class="lost-btn">
                <a href="{{url('/')}}">
                  <div style="width: 200px;height: 40px;padding-top: 10px;">
                    GO BACK HOME
                  </div>
                </a>                
              </div>             
            </div>        
          </div>

        </div>
      </div>

  @endsection