@extends('layouts.app')
@section('content')

  <div class="ats-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img src="{!! asset('images/student.png')!!}" alt="">
        </div>
        <div class="col-md-10">
          <h4 style="color:#fff">
            <a href="{{url('/')}}">HOME</a> <i class="fa fa-arrows-h"></i> {{strtoupper($course_name)}}
          </h4>
        </div>
      </div>
    </div>
  </div>


  <div class="section-4">
    <div class="container section4-bg">
      <div class="col-md-12 text-center">
        <h2>{{strtoupper($course_name)}}</h2>
      </div>

      <div class="row">
        <div style="width: 100%; padding: 0 30px;">
          @foreach($lessons as $lesson)
<!--            --><?php
//            $meta = unserialize($lesson->metadata);
//            $info = unserialize($lesson->info);
              $lesson_name = str_replace(' ','-',$lesson->lesson_name);
              $lesson_name = strtolower($lesson_name);
//            ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <a href="/ats/{{$lesson_name}}">
                <div class="resource">
                  <div class="res-banner">
                    <img src="{{$lesson->picture}}" alt="">
                  </div>
                  <div class="res-top">
                    <h3>{{$lesson->lesson_name}}</h3>
                  </div>
                  <div class="res-btm view">
                    VIEW
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
      <?php
      if(!empty($bundle)):
        //dd($bundle);
        if($bundle->course->course->active):
          ?>
      <div class="row">
        <div class="col-md-12">

          <div class="buy-btn">
            <a href="{{url('bundle/'.$id)}}">
              <div style="height: 40px;">
                <div class="buybtn-left">
                  BUY {{$bundle->course->course->name}}
                </div>
                <div class="buybtn-right">
                  <img src="{!!asset('images/shop.png')!!}" alt="">
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <?php
      endif;
      endif;
      ?>
    </div>
  </div>
@endsection