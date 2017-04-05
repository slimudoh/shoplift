<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
        ]);
        
        //$user->eF_process();
        
        return $user;
    }
    
    public function sendMail($code = ''){
        
         $user = User::findOrFail(Auth::User()->id);

        Mail::send('emails.register', ['user' => $user,'code' => $code], function ($m) use ($user) {
            $m->from('noreply@zercomsystems.com', 'Zercom Systems Nig. Ltd.');

            $m->to($user->email, $user->name)->subject('Registration on the system!');
        });
        
        
        
    }
	
	
	//==================================================ADDED THIS BLOCK OF CODE=====================
	/* START OF REDIRECT-TO-LINKEDIN FUNCTION  */
	public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

	/* END OF REDIRECT-TO-LINKEDIN  FUNCTION */
	
	
	/* START OF HandledLinkedinCallBall FUNCTION  */
/*	
	 public function handleLinkedinCallback()

    {

        try {

            $user = Socialite::driver('linkedin')->user();

            $create['name'] = $user->name;

            $create['email'] = $user->email;

            $create['linkedin_id'] = $user->id;



            $userModel = new User;

            $createdUser = $userModel->addNew($create);

            Auth::loginUsingId($createdUser->id);

            return redirect()->route('/');

        } catch (Exception $e) {

            return redirect('auth/linkedin');

        }

    }	
 *
 */
	/* END OF HandledLinkedinCallBall FUNCTION  */
	
	
    
    //This is the preserved linkdin call back function
  /*  	 public function handleLinkedinCallback()

    {

        try {

            $user = Socialite::driver('linkedin')->user();

            $create['name'] = $user->name;

            $create['email'] = $user->email;

            $create['linkedin_id'] = $user->id;



            $userModel = new User;

            $createdUser = $userModel->addNew($create);

            Auth::loginUsingId($createdUser->id);

            return redirect()->route('/');

        } catch (Exception $e) {

            return redirect('auth/linkedin');

        }

    }
    //End of preserved linkedin callback function
    */
    
	
	
}
