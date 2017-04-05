
@extends('layouts.app')
@section('content')
        <div class="section-1">
          <div class="container">
            <div class="row">
              <div class="headline">
                <h3>The trusted provider of online ICAN courses. Over 1000+ courses from leading authors available</h3>
              </div>
            </div>
            <div class="row">
              <div class="headline-btn">

                <a href="{{url('/register')}}">
                  <div class="headline-left">
                    <div class="head-left">SIGN UP</div>
                    <div class="head-right">
                      <img src="{{asset('images/add.png')}}" alt="">
                    </div>                  
                  </div>                  
                </a>



                <a href="javscript:void" onclick="openDemo()">
                  <div class="headline-right">
                    <div class="head-left">DEMO</div>
                    <div class="head-right">
                      <img src="{{asset('images/next.png')}}" alt="">
                    </div>                  
                  </div>                  
                </a>         
            
              </div>              
            </div>
          </div>
        </div>
      </div>

      <div class="section-2">
        <div class="container">
          <div class="row">
            <div class="section-box">
                <h2>Buy A Course In 4 Easy Steps</h2>
                <br>
                
                  <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-2">
                      <div class="step">
                        <div class="step-top">
                          <img src="{{asset('images/signin.png')}}" alt="">
                        </div>
                        <div class="step-btm">
                          <p>REGISTER/CREATE AN ACCOUNT</p>
                        </div>

                        <div class="arrow-1"> 
                          . . . . . . .
                        </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="step">
                        <div class="step-top">
                          <img src="{{asset('images/email.png')}}" alt="">
                        </div>
                        <div class="step-btm">
                          <p>VALIDATE EMAIL & LOG-IN</p>
                        </div>

                        <div class="arrow-1"> 
                          . . . . . . . 
                        </div>                       

                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="step">
                        <div class="step-top">
                          <img src="{{asset('images/cat.png')}}" alt="">
                        </div>
                        <div class="step-btm">
                          <p>BROWSE COURSE, SELECT AND ADD TO CART</p>
                        </div>

                        <div class="arrow-1"> 
                          . . . . . . . 
                        </div>

                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="step">
                        <div class="step-top">
                          <img src="{{asset('images/pay.png')}}" alt="">
                        </div>
                        <div class="step-btm">
                          <p>PAY FOR COURSE</p>
                        </div>
                        <div class="arrow-1"> 
                          . . . . . . .  
                        </div>

                      </div>
                    </div>


                    <div class="col-md-2">
                      <div class="step">
                        <div class="step-top">
                          <img src="{{asset('images/watch.png')}}" alt="">
                        </div>
                        <div class="step-btm">
                          <p>BEGIN ONLINE TRAINING</p>
                        </div>
                      </div> 
                    </div>
                    <div class="col-md-1"></div>

                  </div>


                <!--<div class="how">
                  <img src="images/how.png" alt="The 4 Easy Steps">            
                </div> -->
              </div>           

          </div>
        </div>
      </div>

      <div class="section-3">
        <div class="container">
          <div class="row">
            @foreach($courses as $course)
           <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="course">
                <div class="course-head">
                  @php  $course_name = str_replace('-',' ',$course->course_name)  @endphp
                  <h2>{{$course_name}}</h2>
                </div>
                <div class="course-body">
                  <p>
                    Lorem ipsum dolor sit amet, omnis bonorum accommodare usu no, eam pertinax iracundia dignissim ea. Unum errem quaerendum pri no. s in.
                  </p>
                </div>

                <span style="display: block;width: 50px;margin: 0 auto;">
                    @php $course_name = strtolower($course->course_name);@endphp
                  <a href="/courses/{{$course_name}}">
                    <div class="course-btn">
                      <img src="{{asset('images/next.png')}}" alt="">
                    </div>
                  </a>                                    
                </span>                           
              </div>
            </div>
           @endforeach

          </div>
        </div>
      </div> 

      <div class="section-4">
        <div class="container section4-bg">
          <div class="col-md-12 text-center">
            <h2>The Resources Center</h2>
          </div>

          <div class="row">
            <div style="width: 100%; padding: 0 30px;">

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/center.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Exam Center</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>                  
                </a>                
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/schedule.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Fee & Schedule</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>                  
                </a>                
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/report.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Examiners Report</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>
                </a>                
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/question.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Past Question Papers</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>
                </a>                
              </div>         
            </div>         
          </div>

          <div class="row">
            <div style="width: 100%; padding: 0 30px;">
              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/study.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Study Group</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>                  
                </a>                
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/chat.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Chat with other students</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>
                </a>                
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/course.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Interactive Courses</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>
                </a>                
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('resource')}}">
                  <div class="resource">
                    <div class="res-banner">
                      <img src="{{asset('images/tutor.png')}}" alt="">
                    </div>
                    <div class="res-top">
                      <h3>Get Private Tutors</h3>
                    </div>
                    <div class="res-btm">
                        <img src="{{asset('images/right.png')}}" alt="">
                    </div>                
                  </div>
                </a>                
              </div>         
            </div>         
          </div>

        </div>
      </div>

      <div class="section-5">
        <ul class="rslides">
          <!-- <li>
            <div class="slider-div1">
              <div class="container">

                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>CONTENT PROVIDERS</h2>
                  </div>
                </div>
                <div class="row">

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="content-box">
                      <div class="content-left">
                        <img src="images/1.png" alt="">
                      </div>
                      <div class="content-right">
                        <h4>Tijani, Adeshina R.</h4>
                        <p>
                          PHD, MSC, HND
                          <br>
                          <span class="content-more">READ MORE</span>
                        </p>                        
                      </div>
                    </div>                    
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="content-box">
                      <div class="content-left">
                        <img src="images/2.png" alt="">
                      </div>
                      <div class="content-right">
                        <h4>Ayozie, Kingsley N.</h4>
                        <p>
                          PHD, MSC, HND
                          <br>
                          <span class="content-more">READ MORE</span>
                        </p>                        
                      </div>
                    </div>                    
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="content-box">
                      <div class="content-left">
                        <img src="images/2.png" alt="">
                      </div>
                      <div class="content-right">
                        <h4>Ayozie, Kingsley N.</h4>
                        <p>
                          PHD, MSC, HND
                          <br>
                          <span class="content-more">READ MORE</span>
                        </p>                        
                      </div>
                    </div>                    
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="content-box">
                      <div class="content-left">
                        <img src="images/3.png" alt="">
                      </div>
                      <div class="content-right">
                        <h4>Mr Lawal</h4>
                        <p>
                          PHD, MSC, HND
                          <br>
                          <span class="content-more">READ MORE</span>
                        </p>                        
                      </div>
                    </div>                    
                  </div>
                </div>


              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>PARTNERS</h2>
                  </div>
                </div>
                <div class="row">

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="partner-box">
                      <img src="images/p1.png" alt="">                    
                    </div>                    
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="partner-box">
                      <img src="images/p2.png" alt="">                    
                    </div>                    
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="partner-box">
                      <img src="images/p3.png" alt="">                   
                    </div>                    
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="partner-box">
                      <img src="images/p4.png" alt="">                     
                    </div>                    
                  </div>
                </div>
                
              </div>
            </div>
          </li> -->
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    65% of e-learning students testify to having a higher course completion rate compared to other learning methods.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    46% of college students & over 60% professionals are taking at least one course online.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    By 2018, it is estimated that 50% of all classes will be delivered online.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    E-learning helps increase information retention rate by up to 60%.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    Online training are over 20% - 40% lower than the cost of classroom training.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    Over 3million students currently enrolled in online programs across the world.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    75% of companies accept & recognize e-learning certifications.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li> 
          <li>
            <div class="slider-div1">
              <div class="container">
                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h2>KEY STATISTICS AND FIGURES</h2>
                  </div>

                  <div class="figures">
                    65% of e-learning students testify to having a higher course completion rate compared to other learning methods.                    
                  </div>
                </div>               
                
              </div>
            </div>
          </li>        
        </ul>       
      </div>

      <div class="section-6">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="career">
                <h4>TAKE A STEP TO YOUR CAREER IN FINANCE WITH ICAN</h4>
                <p>
                  Your success is our priority. That’s why ICAN is the number one choice for accountancy students nationwide. Join the most forward-thinking accountancy body and take that right step to your journey today 
                  <br><br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam nulla, elementum non massa et, laoreet finibus ligula. Pellentesque non ante metus. Vestibulum gravida dolor sit amet nisi mattis, nec fermentum lorem sollicitudin. Mauris efficitur elit non elementum tincidunt. Nulla sed mollis quam. Fusce dapibus sollicitudin purus, non finibus mi congue vitae. Fusce rutrum vulputate scelerisque. Duis lacinia mauris lacus, nec ultrices dolor rhoncus at. 
                </p>
                <br><br><br>

                
                  <div class="career-btn">
                    <a href="{{url('register')}}">
                      <div>
                        Sign up today and start studying on ICANLETURES.COM                        
                      </div>
                    </a>                    
                  </div>                
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="twitter">
                <a class="twitter-timeline" data-width="100%" data-height="400" data-theme="light" href="https://twitter.com/zercomsys">
                  Tweets by zercomsys
                </a> 
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>             
            </div>
          </div>
        </div>
        
      </div>

      <div class="section-7">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <h4>ATS 1</h4>
              <div class="list-cource">
                <ul>
                  <li>Basic Accounting Processes & Systems</li>
                  <li>Economics</li>
                  <li>Business Law</li>
                  <li>Communication Skills</li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <h4>ATS 2</h4>
              <div class="list-cource">
                <ul>
                  <li>Principles and Practice of Financial Accounting</li>
                  <li>Public Sector Accounting</li>
                  <li>Quantitative Analysis</li>
                  <li>Information Technology</li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <h4>ATS 3</h4>
              <div class="list-cource">
                <ul>
                  <li>Principles of Audit</li>
                  <li>Cost Accounting</li>
                  <li>Preparing Tax Computations and Returns</li>
                  <li>Management</li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <h4>FOUNDATION</h4>
              <div class="list-cource">
                <ul>
                  <li>Quantitative Techniques in Business</li>
                  <li>Business and Finance</li>
                  <li>Financial Accounting</li>
                  <li>Management Information Business Law</li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <h4>SKILLED</h4>
              <div class="list-cource">
                <ul>
                  <li>Financial Reporting</li>
                  <li>Audit and Assurance</li>
                  <li>Taxation</li>
                  <li>Performance Management</li>
                  <li>Public Sector Accounting and Finance</li>
                  <li>Management, Governance and Ethics</li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <h4>PROFESSIONAL</h4>
              <div class="list-cource">
                <ul>
                  <li>Corporate Reporting</li>
                  <li>Advanced Audit and Assurance</li>
                  <li>Strategic Financial Management</li>
                  <li>Advanced Taxation</li>
                  <li>Case Study</li>
                </ul>
              </div>
            </div>
          </div>
        </div>        
      </div>

      <div class="demo-div" id="demodiv">
        <div class="demo-close">
          <span class="x" onclick="closeDemo()">
            <img src="{{asset('images/close.svg')}}" alt="close">
          </span>
        </div>
        <div class="demo-content" id="democontent">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZkZ6Q67Q15E?list=PLNUXodMX8B6Unb32mKiVyZqdr71w4BPBq" frameborder="0" allowfullscreen></iframe>
        </div>
        
      </div>

@endsection