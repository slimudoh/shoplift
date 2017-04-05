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
            <a href="index">HOME</a> <i class="fa fa-arrows-h"></i> {{$category_name}}
          </h4>
        </div>
      </div>
    </div>
  </div>


  <div class="section-4">
    <div class="container section4-bg">
      <div class="col-md-12 text-center">
        <h2>{{$category_name}}</h2>
      </div>

      <div class="row">
        <div style="width: 100%; padding: 0 30px;">
          @foreach($data as $lesson)
            <?php
            $meta = unserialize($lesson->metadata);
            $info = unserialize($lesson->info);
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <a href="{{asset('view_course/'.$lesson->id.'/category/'.$lesson->cat)}}">
                <div class="resource">
                  <div class="res-banner">
                    <img src="{{$lesson->avatar}}" alt="">
                  </div>
                  <div class="res-top">
                    <h3>{{$lesson->name}}</h3>
                  </div>
                  <div class="res-btm view">
                    {{--<a href="{{asset('view_course/'.$lesson->id.'/category/'.$lesson->cat)}}">VIEW</a>--}}
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
            <a href="#">
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