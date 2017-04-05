<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ICAN online e-learning website for ICAN students.">
    <meta name="keywords" content="ICAN, Account, Accounting, Lecture, e-Learning">
    <meta name="author" content="Uwem slim Udoh">


    <!-- favicon links-->
    <link rel="shortcut icon" href="<?php echo asset('images/favicon/favicon.png'); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo asset('courses/images/favicon/apple-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo asset('images/favicon/apple-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo asset('images/favicon/apple-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo asset('images/favicon/apple-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo asset('images/favicon/apple-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo asset('images/favicon/apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo asset('images/favicon/apple-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo asset('images/favicon/apple-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo asset('images/favicon/apple-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo asset('images/favicon/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo asset('images/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo asset('images/favicon/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo asset('images/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo asset("images/favicon/ms-icon-144x144.png"); ?>">
    <meta name="theme-color" content="#ffffff">

    <title>ICANLECTURES.COM - ICAN online community</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.min.css'); ?>" >

    <!-- style sheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/slider.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/modal.css'); ?>">


    <!-- font-awesome -->
    <link rel="stylesheet" href="<?php echo asset('font/css/font-awesome.min.css'); ?>">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="video-div" id="video-div">
    <video width="100%" height="100%" id="video" loop autoplay>
        <source src="<?php echo asset('video/ican.mp4'); ?>" type="video/mp4">
        your browser does not support the video tag.
    </video>
</div>
<?php if(Session::has('message')): ?>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p><?php echo Session::get('message'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>
<div class="overlay">
    <div class="header">
        <!-- <div class="main-menu">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="logo">
                  <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
              </div>
              <div class="col-md-8">
                <div class="menu">
                  <div class="menu-btn" id="parent">
                    <div class="left-btn" id="child-1">
                      CART
                    </div>
                    <div class="right-btn" id="child-2">
                      <img src="images/cart.png" alt="" id="child-3">
                    </div>
                  </div>

                  <div class="menu-btn" style="margin-right: 10px;">
                    <a href="signin.php">
                      <div style="overflow: hidden;">
                        <div class="left-btn">
                          SIGN IN
                        </div>
                        <div class="right-btn">
                          <img src="images/key.png" alt="">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="logo">
                            <a href="index"><img src="<?php echo asset('images/logo.png'); ?>" alt="logo"></a>
                        </div>
                    </div>
                    <?php 
                    $cart = Session::get('cart');
                    @$size = sizeof($cart);
                     ?>
                    <div class="col-xs-12 col-sm-6 col-md-8" style="padding: 0;">
                        <div class="menu" style="overflow: hidden;">

                            <ul>
                                
                                
                                <li ><a href="<?php echo e(ZERCOMSERVERURL.'/index.php?autologin='.base64_decode(Auth::User()->autologin)); ?>">VIEW COURSE CATALOGUE <i class="fa fa-table"></i></a></li>
                                <li><a href="<?php echo e(route('logout')); ?>"><span class="fa fa-user"></span> LOGOUT </a></li>





                                 <?php if(isset(Auth::User()->id)): ?>
                                <li id="child-2">
                                  Welcome <a><?php echo e(ucfirst(Auth::User()->name)); ?><i class="fa fa-caret-down"></i></a>

                                    <div class="user" id="user">
                                      <div class="angle1">        
                                      </div> 

                                      <div class="user-body">
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(ZERCOMSERVERURL.'/index.php?autologin='.base64_decode(Auth::User()->autologin)); ?>">
                                                    VIEW COURSE CATALOGUE<i class="fa fa-table"></i>
                                                </a>
                                            </li>
                                          <li><a href="<?php echo e(route('logout')); ?>"><span class="fa fa-user"></span> SIGN OUT</a></li>
                                        <ul>        
                                      </div> 
                                    </div>
                                </li>
                                <!-- <li ><a href="#"><i class="fa fa-table"></i> COURSE CATALOG</a></li> -->
                                <li id="child-1"> 
                                  <i class="fa fa-cart-arrow-down" id="parent"></i> CART: 0 - item(s) 
                                  <i class="fa fa-caret-down"></i>

                                  <div class="cart" id="cart">
                                    <div class="angle2">        
                                    </div>

                                    <div class="cart-header">
                                      <h4>CART</h4>
                                    </div>

                                    <div class="cart-body">
                                      Your Cart is Empty
                                    </div>

                                    <a href="checkout.php">
                                      <div class="cart-btn">
                                        CheckOut
                                      </div>        
                                    </a>
                                  </div>

                                </li>
                              </ul>














                            <!--<ul>
                                <?php if(isset(Auth::User()->id)): ?>
                                <li>Welcome <a><?php echo e(ucfirst(Auth::User()->name)); ?></a></li>
                                <li ><a href="<?php echo e(ZERCOMSERVERURL.'/index.php?autologin='.base64_decode(Auth::User()->autologin)); ?>">VIEW COURSE CATALOGUE <i class="fa fa-table"></i></a></li>
                                <li><a href="<?php echo e(route('logout')); ?>"><span class="fa fa-user"></span> LOGOUT </a></li>





                                <?php else: ?>
                                <!--<li><a href="<?php echo e(route('register')); ?>"><span class="fa fa-user"></span> SIGN UP</a></li> -->
                                <!-- <li><a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in"></i> SIGN IN </a></li>
                                <?php endif; ?>
                                <li id="child-1"><i class="fa fa-cart-arrow-down" id="parent"></i> CART: <?php echo e(@$size); ?> - Item(s)</li>
                            </ul> -->


                            <!--<div class="menu-btn" id="parent">
                              CART <i class="fa fa-cart-arrow-down"></i>
                             <div class="left-btn" id="child-1">
                                CART <i class="fa fa-cart-arrow-down"></i>
                              </div>
                              <div class="right-btn" id="child-2">
                                <img src="images/cart.png" alt="" id="child-3">
                              </div>
                            </div>

                            <div class="menu-btn" id="parent">
                              <div class="left-btn" id="child-1">
                                CART
                              </div>
                              <div class="right-btn" id="child-2">
                                <img src="images/cart.png" alt="" id="child-3">
                              </div>
                            </div>

                            <div class="menu-btn" style="margin-right: 10px;">
                              <a href="signin.php">
                                <div style="overflow: hidden;">
                                  <div class="left-btn">
                                    SIGN IN
                                  </div>
                                  <div class="right-btn">
                                    <img src="images/key.png" alt="">
                                  </div>
                                </div>
                              </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php echo $__env->yieldContent('content'); ?>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="copyright">
                            &copy;2016 ICANLECTURES.COM
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>" class="foothover">Home.</a></li>
                                <li><a href="<?php echo e(url('about')); ?>" class="foothover">About Us.</a></li>
                                <li><a href="<?php echo e(url('privacypolicy')); ?>" class="foothover">Privacy Policy.</a></li>
                                <li><a href="<?php echo e(url('terms')); ?>" class="foothover">Terms and Conditions.</a></li>
                                <li><a href="<?php echo e(url('faq')); ?>" class="foothover">FAQ's.</a></li>
                                <li><a href="<?php echo e(url('resources')); ?>" class="foothover">Resources.</a></li>
                                <li><a href="<?php echo e(url('security')); ?>" class="foothover">Security.</a></li>
                                <li><a href="<?php echo e(url('contactus')); ?>" class="foothover">Contact Us.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#" class="foothover"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="foothover"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="foothover"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="foothover"><i class="fa fa-linkedin-square"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="foothover"><i class="fa fa-youtube-square"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="cart" id="cart">
    <?php if(!empty($cart)): ?>
        <form id="cartForm" method="POST" action="<?php echo e(ZERCOMSERVERURL); ?>/api/v1/cart/new/<?php echo e(isset(Auth::User()->autologin)?Auth::User()->autologin:'empty'); ?>">
            <?php  $bar = [];
                foreach($cart as $item):
                    $foo    = isset($item['course_id']) ? 'course':'lesson';

                   if(isset($item['course_id'])){
                        $bar[] = $item['course_id'];
                    }

             ?>
        <div class="cart-header">
            <?php /*<h4>CART</h4>*/ ?>
        <span class="item">

            <span class="item-left">
                        <span class="item-info">
                            <span class="text-info">
                                <b><?php echo e($item[$foo.'_name']); ?></b>
                            </span>
                            <span class='text-success'>
                                <b>&#8358;<?php echo e(number_format($item['price'])); ?></b>
                            </span>
                        </span>
                    </span>
            <span class="item-right">
                        <a href="<?php echo e(asset('remove/'.$item[$foo.'_id'])); ?>" class="btn btn-xs btn-danger pull-right">x</a>
                        <input type="hidden" value="<?php echo e($item[$foo.'_id']); ?>" name="<?php echo e($foo); ?>[]" />
                    </span>
            </span>

        </div>
        <?php endforeach; ?>
            <?php if(!empty($bar)): ?>:
        <input type="hidden" value="course" name="type" />
        <?php endif; ?>
        <input type="hidden" value="addToCart" name="fct" />
        <button class="btn detail-btn">
                CheckOut
         </button>

        <?php endif; ?>
        </form>
            <?php if(empty($cart)): ?>
            <div class="cart-body">
                Your Cart is Empty
            </div>
            <?php endif; ?>

    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo asset('js/bootstrap.min.js'); ?>"></script>
    <script>
        $('#myModal').modal('show')
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?php echo asset('js/responsiveslides.min.js'); ?>"></script>
    <script src="<?php echo asset('js/slider.js'); ?>"></script>
    <script>
        $(function() {
            $(".rslides").responsiveSlides();
        });
    </script>

    <script src="<?php echo asset('js/modal.js'); ?>"></script>

    <!--------Logo Slider js---------->

    <script>
        $('#cartForm').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url:'<?= asset('destroy') ?>',
                type:'POST',
                context: $(this),
                data:{destroy:1,_token:'<?= csrf_token() ?>'},
                success:function(data,xhr){
                    $(this).unbind('submit').submit();
                },
                error:function(data,xhr){
                    console.log(data);
                },
            });
        });
    </script>
</body>
</html>