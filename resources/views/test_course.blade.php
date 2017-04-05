@extends('layouts.app')
@section('content')

    <div class="ats-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="images/student.png" alt="">
                </div>
                <div class="col-md-10">
                    <h4 style="color:#fff">
                        <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> ATS
                    </h4>
                </div>
            </div>
        </div>
    </div>


    <div class="section-4">
        <div class="container section4-bg">
            <div class="col-md-12 text-center">
                <h2>ATS</h2>
            </div>

            <div class="row">
                <div style="width: 100%; padding: 0 30px;">
                    @foreach($data as $lesson)
                        <?php
                        $meta = unserialize($lesson->metadata);
                        $info = unserialize($lesson->info);
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="courses">
                                <div class="resource">
                                    <div class="res-banner">
                                        <img src="{{$lesson->avatar}}" alt="">
                                    </div>
                                    <div class="res-top">
                                        <h3>{{$lesson->name}}</h3>
                                    </div>
                                    <div class="res-btm view">
                                        <a href="{{asset('view_course/'.$lesson->id.'/category/'.$lesson->cat)}}">VIEW</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="buy-btn">
                        <a href="#">
                            <div style="height: 40px;">
                                <div class="buybtn-left">
                                    BUY TESTING
                                </div>
                                <div class="buybtn-right">
                                    <img src="images/shop.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection