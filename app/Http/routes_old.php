<?php
foreach ($aa as $vL):
    endforeach;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
define('ZERCOMSERVERURL','http://icandev.zercomsystems.com');


Route::get('/', function () {

    $data = file_get_contents(ZERCOMSERVERURL.'/getCat.php');

    $data = json_decode($data);

    
    return view('index')->with('data',$data);
});

Route::get('/courses/{id}/{category_name}',function ($id,$category_name){
   
    $data   = file_get_contents(ZERCOMSERVERURL.'/getCatLessons.php?id='.$id);
    
    $bundle = file_get_contents(ZERCOMSERVERURL.'/getCatLessons.php?id='.$id.'&bundle=1');
    $bundle = json_decode($bundle);
    
    $data = json_decode($data);
    
    if(!empty($data)){
        return view('courses')->with([
                                        'data' 		=>  $data,
                                        'category_name'	=>  $category_name,
                                        'bundle'        =>  $bundle,
                                        'id'            =>  $id
                                    ]);
    }else{
        return view('courses_404');
    }
    
});

Route::get('/bundle/{id}',function($id){
    
    $bundle = file_get_contents(ZERCOMSERVERURL.'/getCatLessons.php?id='.$id.'&bundle=1');
    $bundle = json_decode($bundle);
    
    $cat = file_get_contents(ZERCOMSERVERURL.'/getCat.php');
    $cat = json_decode($cat);
    
    
    if(!empty($bundle))
    {
        return view('bundle')->with([
                                        'bundle'        =>  $bundle,
                                        'cat'           =>  $cat
                                    ]);
    }else{
        return view('courses_404');
    }
});

Route::get('/view_course/{course_id}/category/{cat_id}',function ($course_id,$cat_id){
   
    
    $data = file_get_contents(ZERCOMSERVERURL.'/getLesson.php?id='.$course_id.'&cat_id='.$cat_id);
    
    $data = json_decode($data);
    
    $cat = file_get_contents(ZERCOMSERVERURL.'/getCat.php');
    
    $cat = json_decode($cat);
   
    if(!empty($data)){
        return view('course')->with([
            'data'  => $data,
            'cat'   =>  $cat
                ]);
    }else{
        return view('courses_404');
    }
    
});

Route::post('/add_to_cart',function(Request $request){
    
    
    $input = $request::all();

//    echo '<pre>';
//        print_r($input);
//    echo '<pre>';
    $message = ' item(s) added!!';
    $message2 = ' item(s) not added!!';
    //dd($input);
    if(isset($input['lesson_id'])){
        $foo = 'lesson';
    }else{
        $foo = 'course';
    }
//    $cart = [
//        'lesson_id'     => $input['lesson_id'],
//        'price'         => $input['price'],
//        'lesson_name'   => $input['lesson_name'],
//        ];
//    }else{
        $cart = [
            $foo.'_id'     => $input[$foo.'_id'],
            'price'         => $input['price'],
            $foo.'_name'   => $input[$foo.'_name'],
        ];
    //}
    //session('cart',$cart);
    $check = Session::get('cart');


    if($check){
        
        $x = 0;
        $y = 0;
        foreach($check as $key => $val ){
            $items[] = $val[$foo.'_id'];

        }
        if(in_array($input[$foo.'_id'], $items)){
            $y++;
        }else{
                    Session::push('cart',$cart);
                    $x++;
             }
    }else{
        $x = 1;
        //dd($cart);
        Session::push('cart',$cart);
    }

    $check = Session::get('cart');

    $size = sizeof($cart);

    $check = Session::put('cart_size',$size);
    //Session::forget('cart');
    if( $x >= 1)
    {
        $message = '<p class="text-center"><i class="fa fa-cart-arrow-down fa-4x text-success"></i></p>';
        $message .= '<p class="text-center text-success"><b>'.$input[$foo.'_name'].'</b> successfully added to cart</p>';
    
    }else{
        $message = '<p class="text-center"><i class="fa fa-times fa-4x text-danger"></i></p> ';
        $message.= '<p class="text-center text-danger"><b>'.$input[$foo.'_name'].'</b> is already added to cart</p>';
    }
    return Redirect::back()->with('message',$message);
    
});

//Testing.....
Route::get('/test',function(){
    
    $check = Session::get('cart');
    dd($check);
    
});

Route::get('/remove/{id}',function($id){
    
    $check = Session::get('cart');
    
    if($check)
    {
        foreach($check as $key => $val )
        {
            $foo = isset($val['lesson_id']) ? 'lesson' : 'course';
            
             if($val[$foo.'_id'] == $id)
             {
                 $message = '<p class="text-center"><i class="fa fa-check fa-4x text-success"></i></p> ';
                 $message.= '<p class="text-center text-success"><b>'.$val[$foo.'_name'].'</b> removed from cart</p>';
                 
                    Session::forget('cart.'.$key);
                    return Redirect::back()->with('message',$message);
             }
        }
    }else{
        $x = 1;
        
         $message = '<p class="text-center"><i class="fa fa-times fa-4x text-danger"></i></p> ';
         $message.= '<p class="text-center text-danger"><b>Item not found</p>';
         
        return Redirect::back()->with('message',$message);
    }
    
   
    
});

//========================= empty cart =========================//
Route::post('/destroy',function(Request $request){
    
    $data = $request::get('destroy');
    
    if($data){
        Session::forget('cart');
        echo 'seccess';
    }else{
        echo 'failed';
    }
});
//======================= API For Ola =======================//
Route::get('/login',[
    'middleware'    => ['guest'],
    'uses'          =>  'Auth\AuthController@getLogin',
    'as'            =>  'login'
]);

Route::post('/login',[
    'middleware'    => ['guest'],
    'uses'          =>  'Auth\AuthController@postLogin',
]);

Route::get('/register',[
    'middleware'    => ['guest'],
    'uses'          =>  'Auth\AuthController@getRegister',
    'as'            =>  'register'
]);

Route::post('/register',[
    'middleware'    => ['guest'],
    'uses'          =>  'Auth\AuthController@postRegister',
]);

Route::get('/logout',[
    'middleware'    => ['auth'],
    'uses'          =>  'Auth\AuthController@logout',
    'as'            =>  'logout'
]);

Route::get('/downloads',[
    'middleware'    => ['auth'],
    'uses'          =>  'DownloadController@index',
    'as'            =>  'downloads'
]);

Route::get('/downloads/{id}',[
    'middleware'    => ['auth'],
    'uses'          =>  'DownloadController@download',
    'as'            =>  'download'
]);

Route::get('/api',function(Request $request){
    dd($request);
});

Route::get('/api/{code}/{mac}/{course_id}',[
    'uses'   =>  'DownloadController@verify'
]);

Route::get('/mail',[
    'uses'   =>  'DownloadController@sendMail'
]);


//==================== Inner Pages ===================//

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/resource', function () {
    return view('/resource');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/ats', function () {
    return view('ats');
});
Route::get('/foundation', function () {
    return view('foundation');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/refundpolicy', function () {
    return view('refundpolicy');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/security', function () {
    return view('security');
});
Route::get('/learn-more', function () {
    return view('learn-more');
});

Route::get('/content_providers', function () {
    return view('content_providers');
});

//==================== End of Inner Pages ===================//


//==================== Tracker ===================//
Route::group(['prefix' => 'tracker'],function(){
    
    Route::post('/create-location',[
        'uses'  => 'TrackerController@createLocation',
        'as'    =>  'create_location'
    ]);
    
    Route::get('/group-drivers/{id}',[
        'uses'  => 'TrackerController@getGroupDrivers'
    ]);
    
    Route::get('/groups',[
        'uses'  => 'TrackerController@getGroups'
    ]);
    
    Route::get('/group/{id}',[
        'uses'  => 'TrackerController@getGroup'
    ]);
    
    Route::get('/token',[
        'uses'  => 'TrackerController@token'
    ]);
    
     Route::get('/locate/{user_id}/{g_id}',[
        'uses'  => 'TrackerController@locate'
    ]);
     
     Route::get('/debug',function(){
         
         //$token = \App\User::eF_apiLogin();
         echo Auth::User()->eF_process();
     });
    
});

Route::group([
    'prefix'    =>  'social',
    'middleware'=>  ['web']
],function(){
    
    Route::get('/facebook/redirect',[
        'uses' => 'FacebookController@redirect',
        'as'   =>   'fb_redirect'
    ]);
    
    Route::get('/facebook/callback',[
        'uses' => 'FacebookController@callback',
        'as'   =>   'fb_callback'
    ]);
    
      
    
});
//=================== End Tracker ===================//


//====================Linkedin======================================================//
//route redirecting to linkedin login page
Route::get('auth/linkedin', 'Auth\AuthController@redirectToLinkedin');
//route intended to do logic, sign user in and redirect back to private website
Route::get('auth/linkedin/callback', 'FacebookController@callback9');

//=====================End of Linkedin==============================================//