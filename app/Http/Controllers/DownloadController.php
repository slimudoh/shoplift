<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use App\User;
use App\UsedCode;
use App\Code;
use Auth;

class DownloadController extends Controller
{
    //
    public function index(){
        return view('downloads');
    }
    
    public function download($id) {
        
        if(!Auth::User()->code()->where('course_id',$id)->count()){
            
            $hash               =   Auth::user()->id.Auth::User()->email.$id;
            $actCode            =   hash('md5', $hash);
            $code               =   new Code;
            $code->id           =   $actCode;
            $code->course_id    =   $id;
            
            $code->user()->associate(Auth::User());
            
            $code->save();
            
            $this->sendMail($actCode);
            
            return redirect()->back()->with('message','Successfully downloaded');
            
        }
        
    }
    
    public function verify($code,$mac,$course_id){
        
        $C = Code::find($code);
        if(!$C){ //If code does not exist
            
            return response()->json([
                'response'  =>  '404',
                'status'    =>  'failed',
                'reason'    =>  'Invalid Code'
            ]);
        }else{  //if code exists
            
            $M  = UsedCode::find($code);
            
            if(!$M){ //If code has not been used
                $M              =   new UsedCode;
                $M->id          =   $code;
                $M->mac         =   $mac;
                $M->course_id   =   $course_id;
                $M->counter     =   1;
                
                $M->save();
                
                
                return response()->json([
                    'response'  =>  '200',
                    'status'    =>  'success',
                    'reason'    =>  'New User'
                ]);
                
            }else{ //Code has been used
                
                if($mac === $M->mac && $M->course_id == $course_id){ //if it's originating from the Mac address & course_id we have
                    
                    $M->id  =   $code;
                    $M->mac =   $mac;
                    $M->counter++;
                    $M->save();
                    
                     return response()->json([
                        'response'  =>  '210',
                        'status'    =>  'success',
                        'reason'    =>  'Existing user'
                    ]);
                }else{ //this code has a different Mac Address
                     return response()->json([
                        'response'  =>  '410',
                        'status'    =>  'failed',
                        'reason'    =>  'Code does not match'
                    ]);
                }
            }
        }
        
    }
    
    public function sendMail($code = 'error getting code'){
        
         $user = User::findOrFail(Auth::User()->id);

        Mail::send('emails.reminder', ['user' => $user,'code' => $code], function ($m) use ($user) {
            $m->from('noreply@zercomsystems.com', 'Zercom Systems Nig. Ltd.');

            $m->to($user->email, $user->name)->subject('Your Activation Code!');
        });
        
        
        
    }
}
