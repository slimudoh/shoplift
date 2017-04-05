@extends('layouts.app')
@section('content')
        <div class="detail-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="{!! asset('images/detail.png') !!}" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  {{--<a href="{!! url('courses') !!}">ATS LEVEL</a><i class="fa fa-arrows-h">--}}
                  <a href="{!! url('/') !!}">HOME</a> <i class="fa fa-arrows-h"></i>  <a href="{{url('/courses/'.strtolower($course_name))}}">{{$course_name}} </a> <i class="fa fa-arrows-h"></i>  {{$lesson->lesson_name}}
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4">
          <div class="container section4-bg" >

            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="course-video">
                      <iframe width="100%" height="200" src="https://www.youtube.com/embed/ZkZ6Q67Q15E?list=PLNUXodMX8B6Unb32mKiVyZqdr71w4BPBq" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="about-head">
                      <h3>  {{$lesson->lesson_name}}</h3>
                      <div class="rating">
                        <span class="red-star"><i class="fa fa-star"></i></span>
                        <span class="red-star"><i class="fa fa-star"></i></span>
                        <span class="red-star"><i class="fa fa-star"></i></span>
                        <span class="red-star"><i class="fa fa-star"></i></span>
                        <span class="red-star"><i class="fa fa-star-o"></i></span>                    
                      </div>
                      <form class="form-inline" method="POST" action="{{asset('add_to_cart')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="price" value="{{$lesson->price}}" />
                        <input type="hidden" name="lesson_id" value="{{$lesson->id}}" />
                        <input type="hidden" name="lesson_name" value="{{$lesson->lesson_name}}" />

                        <button class=" detail-btn pull-left">
                          ADD TO CART  <i class="fa fa-cart-plus"></i>
                        </button>
                      </form>
                      {{--<div class="detail-btn">--}}
                        {{--<a href="#">--}}
                          {{--ADD TO CART  <i class="fa fa-cart-plus"></i>                        --}}
                        {{--</a>                                           --}}
                      {{--</div>--}}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="about">
                      <h4>ABOUT THIS COURSE</h4>
                      <p style="color:#000;">
                        {!! $lesson->long_description or '' !!}
                      </p>
                    </div>
                    
                  </div>
                </div>   
              </div>
              <?php
//              $meta = unserialize($data->lesson->metadata);
//              $info = unserialize($data->lesson->info);
//
//              ?>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="detail-sidebar">
                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/clock.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>TIME:</strong>
                      <br>
                      {{$lesson->duration}}
                    </div>
                  </div>
                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/price.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>PRICE:</strong>
                      <br>
                      &#8358;{{number_format($lesson->price)}}
                    </div>
                  </div>

                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/person.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>CONTENT PROVIDER:</strong>
                      <br>
                      AYOZIE KINGSLEY NDUBUEZE FCTI, FCA
                    </div>
                  </div>

                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/tv.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>COURSE:</strong>
                      <br>
                      {{$lesson->lesson_name}}
                    </div>
                  </div>

                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/level.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>LEVEL:</strong>
                      <br>
                      INTRODUCTORY
                    </div>
                  </div>

                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/cht.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>LANGUAGE:</strong>
                      <br>
                      ENGLISH
                    </div>
                  </div>

                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/video.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>VIDEO LANGUAGE:</strong>
                      <br>
                      ENGLISH
                    </div>
                  </div>

                  <div class="sidebar-box">
                    <div class="sidebar-left">
                      <img src="{!! asset('images/share.png') !!}" alt="">
                    </div>
                    <div class="sidebar-right">
                      <strong>FOLLOW US TO GET UPDATES:</strong>
                      <br>
                      <span class="icon-font">
                        <a href="#" class="foothover"><i class="fa fa-facebook-square"></i></a>
                      </span>&nbsp;
                      <span class="icon-font">
                        <a href="#" class="foothover"><i class="fa fa-twitter-square"></i></a>
                      </span>&nbsp;
                      <span class="icon-font">
                        <a href="#" class="foothover"><i class="fa fa-instagram"></i></a>
                      </span>&nbsp;
                      <span class="icon-font">
                        <a href="#" class="foothover"><i class="fa fa-linkedin-square"></i></a>
                      </span>&nbsp;
                      <span class="icon-font">
                        <a href="#" class="foothover"><i class="fa fa-youtube-square"></i></a>
                      </span>                     
                    </div>
                  </div>                 
                  
                </div>
              </div>            
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="about">
                  <h4>WHAT YOU WILL LEARN</h4>
                  <div class="what-learn">
                    <ul style="color:#000">
                      {!! $lesson->short_description !!}
                    </ul>                   
                  </div>                      
                </div>

                <div class="about">
                  <h4>MEET THE INSTRUCTOR(S)</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="meet-inst">
                        <div class="photo">
                          <img src="{!! asset('images/1.png') !!}" alt="">
                        </div>
                        <div class="instructor">
                          <!-- <div class="inst-left">
                            <img src="{!! asset('images/instname.png') !!}" alt="">
                          </div> -->
                          <div class="inst-right">AYOZIE KINGSLEY NDUBUEZE FCTI, FCA</div>
                        </div>
                        <div class="instructor">
                          <!-- <div class="inst-left">
                            <img src="{!! asset('images/brief.png') !!}" alt="">
                          </div> -->
                          <div class="inst-right" style="color:#000">
                            Co-founder/Director 
                            <br>                         
                            Password Professional Tutors (PPT) Limited
                            <br>
                            Accountancy and Financial Training Centers, Akoka
                          </div>
                        </div> 
                        <div class="instructor">
                          <!-- <div class="inst-left">
                            <img src="{!! asset('images/send.png') !!}" alt="">
                          </div> -->
                          <div class="inst-right">accountantkay@yahoo.com</div>
                        </div>                       
                      </div>                      
                    </div>



                    <div class="col-md-12">
                      <div class="line"></div>
                      <p>
                        Kingsley, a chartered accountant by profession and a teacher by vocation is  a co-founder and also as a Director with Password Professional Tutors (PPT) Limited (Accountancy and Financial Training Centers, Akoka by UNILAG maingate, Lagos where he oversees both the Ethics and Audit & Assurance departments. Prior to the set up of Password Professional Tutors (PPT), Kingsley had a stint with three (3) reputable ICAN/ACCA tutorial houses in Lagos such as: Student PYE Nigeria Limited, Lagos, Legacy Professional Tutors, Lagos, Pass Associate Limited, Lagos.
                        <br><br>
                        Ayozie, is a Fellow of the Institute of Chartered Accountants of Nigeria (FCA); Fellow of the Chartered Institute of Taxation of Nigeria (FCTI) and Associate of the Chartered Institute for Securities & Investment UK (ACSI). He brings to bear well over two decades of diverse wealth of experiences spanning through the private sector, banking, public Accountancy practice and human capital development to mention but a few.
                        <br><br>
                        For several diets, Kingsley was a research fellow cum visiting lecturer in both the skills’ Level Audit & Assurance (AA) and the final level Advance Audit & Assurance (AAA) at the following ICAN upcountry centres under the Institute’s Students Special Project (SSP) scheme such as: ICAN Study Center Calabar, Cross River State, Nigeria, ICAN Study Center Kano, Kano States Nigeria. A scholar per excellence, he has published widely in the area of Governance, Ethics and Audit & Assurance such as: Descriptive Audit & Assurance Dictionary 2016, Basic Concepts under Management, Governance and Ethics 2015, First Aid in Advance Audit & Assurance 2013.
                        <br><br>
                        Kingsley is a trainer of ICAN prize winners. During the 2016 MAY Induction ceremony of ICAN, TWO (2) of his professional students were adjudged as the overall best students in both Audit & Assurance and Management, Governance & Ethics respectively. Above all, he is married to his adorable soul mate Dr (Mrs) Amara D Ayozie and they are both blessed with lovely children.
                      </p>
                    </div>
                  </div>
                </div>


              </div>
              <!-- <div class="col-md-2"></div> -->
            </div>

          </div>
        </div>

@endsection