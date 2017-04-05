@extends('layouts.app')
@section('content')
        <div class="contact-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="images/contact.png" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> CONTACT US
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4">
        <div class="container section4-bg" style="height: 100%;min-height: 500px;">
          <div class="row" style="padding: 0 20px;">
            <div class="col-md-12 text-center">
              <h2>CONTACT US</h2>
            </div>




            <div class="col-md-12">
              Hi, already an ICANLECTURES.COM student? Do you have questions, suggestions, or issues about a specific course? Please send it to info@icanlectures.com.

              Not a student yet and have a general question about ICANLECTURES.COM? Please visit our FAQ’s. Still need help or want to give us general feedback (which we want), contact us below.
            </div>
            <div class="row">
              <div class="col-md-6">
                

                <div class="contact-box">

                  <div class="col-md-12 text-center">
                    <h4>SEND US A MESSAGE</h4>  
                  </div>

                  <form method="post" action="">              
  
                    <div class="contact-div">
                      <div class="contact-icon">
                        <img src="images/contname.png" alt="">
                      </div>
                      <div class="contact-input">
                        <input type="text" name="" class="contactinput" placeholder="Full name" required>
                      </div>                    
                    </div> 

                    <div class="contact-div">
                      <div class="contact-icon">
                        <img src="images/contmail.png" alt="">
                      </div>
                      <div class="contact-input">
                        <input type="text" name="" class="contactinput" placeholder="Email" id="email" onblur="contactEmailValidate()" required>
                      </div>                                          
                    </div> 
                    <div class="text-center" id="err-email" style="font-size: 10px;color: red;"></div>

                    <div class="contact-div">
                      <div class="contact-icon">
                        <img src="images/contphone.png" alt="">
                      </div>
                      <div class="contact-input">
                        <input type="text" name="" class="contactinput" placeholder="Phone" id="phone" onblur="contactPhoneValidate()" required>
                      </div>                    
                    </div>
                    <div class="text-center" id="err-phone" style="font-size: 10px;color: red;"></div>

                    <textarea class="contact-text"  placeholder="Enter message"></textarea>

                    <div class="contact-div">
                      <input type="submit" name="" class="contact-btn">
                    </div>

                  </form>


                </div>                
              </div>
              <div class="col-md-6">
                

                <div class="contact-box">               

                  <div class="col-md-12 text-center">
                    <h4>CONTACT US</h4>  
                  </div>

                  <div class="connect">
                    <div class="connect-icon">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="connect-text">
                      3rd Floor, Engineering Building, 1, Engineering Close, NEC Building, Off Idowu Taylor Street, Victoria Island, Lagos, Nigeria.
                    </div>
                  </div>

                  <div class="connect">
                    <div class="connect-icon">
                      <img src="images/contemail.png" alt="">
                    </div>
                    <div class="connect-text">
                      info@icancertifications.com
                    </div>
                  </div>

                  <div class="connect">
                    <div class="connect-icon">
                      <img src="images/phone.png" alt="">
                    </div>
                    <div class="connect-text">
                      (+234)-1-013429741<br>
                      (+234)-1-013429741
                    </div>
                  </div>

                </div>
                
              </div>
            </div> 
              
          </div>      

        </div>
      </div>
@endsection