@extends('layouts.app')
@section('content')
        <div class="cart-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="images/shoppingcart.png" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> CART
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4" style="height: 100vh;">
        <div class="container section4-bg">
          <div class="col-md-12 text-center">
            <h2>CART</h2>
          </div>



          <div class="row">
            <div style="width: 100%; padding: 0 30px;height: 100%;">
              <div class="cart-empty">
                <span class="span-empty">Your Cart is Empty</span>
              </div>             
            </div>         
          </div>


          <div class="row">
            <div class="col-md-12">

              <div class="buy-btn">
                <a href="index.php">
                  <div style="height: 40px;">
                    <div class="buybtn-left">
                      BACK TO HOME
                    </div>
                    <div class="buybtn-right">
                      <img src="images/home.png" alt="">
                    </div> 
                  </div>                                   
                </a>            
              </div>
            </div>
          </div>

        </div>
      </div>
@endsection