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
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon/apple-icon-72x72.png')}}g">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/apple-icon-72x72.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">    
    
    <title>ICANLECTURES.COM - ICAN online community</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" >

    <!-- style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{asset('font/css/font-awesome.min.css')}}">

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
    <div class="signin-div">
      <div class="signin-box">
        <div class="signin-logo">
          <a href="{{url('/')}}">
            <img src="{{asset('images/logo.png')}}" alt="logo">
          </a>
        </div>

        <div class="signin-key">
          <img src="{{asset('images/lock.png')}}" alt="padlock">
        </div>

        <div class="signin-input">
          <form method="post" role="form">
            {!!csrf_field()!!}

            <div class="signin-inputdiv {{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="inputdiv-left">
                <img src="{{asset('images/letter.png')}}" alt="">
              </div>
              <div class="inputdiv-right">
                <input type="email" class="login-input" placeholder="Email" name="email" value="{{ old('email') }}" required>

              </div>
            </div>
            @if ($errors->has('email'))
              <span class="help-block" style="text-align:center">
                    <strong style="color:#b30000">{{ $errors->first('email') }}</strong>
                  </span>
            @endif
            <div class="signin-inputdiv {{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="inputdiv-left">
                <img src="{{asset('images/pass.png')}}" alt="">
              </div>
              <div class="inputdiv-right">
                <input type="password" class="login-input" placeholder="Password" name="password" required>

              </div>
            </div>
            @if ($errors->has('password'))
              <span class="help-block" style="text-align:center">
                    <strong style="color:#b30000">{{ $errors->first('password') }}</strong>
                   </span>
            @endif
            <div class="signin-inputbtn">
              <input type="submit" name="login" value="Login" class="login-btn" >
            </div>
          </form>          
        </div>

        <div class="forgot">
          <div class="forgot-left">
            <div class="forgot-icon">
              <img src="{{asset('images/fb.png')}}" alt="">
            </div>
            <div class="forgot-text">
              <a href="{{route('fb_redirect')}}">SIGN IN WITH FACEBOOK</a>
            </div>
          </div>

          <div class="forgot-right">
            <div class="forgot-icon">
              <img src="images/tw.png" alt="">
            </div>
            <div class="forgot-text">
              <a  href="{{ url('auth/linkedin') }}">SIGN IN WITH LINKEDIN</a>
            </div>
          </div>
        </div>


        <div class="register">
          Not yet registered? <a href="{{url('/signup')}}">Click here to sign up</a>
        </div>

        <div class="signin-copyright">
          &copy;2016 ICANLECTURES.COM        
        </div>

      </div>
      
    </div>
      

    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>     

  </body>
</html>