<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use App\User;
use App\Driver;
use App\Location;
use App\Group;
use Auth;

class TrackerController extends Controller
{
    public function getGroupDrivers($g_id) {
        
        $group      = Group::find($g_id);
        $drivers    = $group->driver;
        
        return response()->json($drivers);
        
    }
    
    public function getGroups() {
        
        $group      = Group::all();
        
        return response()->json($group);
        
    }
    
     public function getGroup($id) {
        
        $group      = Group::find($id);
        
        return response()->json($group);
        
    }
    
    public function createLocation(Request $request) {
        
        $input = $request->all();
        
        //dd($_POST);
        
        $driver = Driver::find($input['driver_id']);
        
        //if(isset($input['location'])){
         $location = Location::find($driver->location()->first()->id);
//        }else{
//            $location = new Location;
//        }
        
        $location->fill($input);
        $location->driver()->associate($driver);
        $location->save();
        
        $return = [
            'status'    => 'success',
            'response'  =>  '200'
        ];
        
        return response()->json($return);
        
        
        
    }
    
    public function locate($user_id,$g_id) {
        
        $return = [];
        
        $group      = Group::find($g_id);
        $locations  = $group->location()->where('driver_id','!=',$user_id)->get();
        foreach($locations as $location){
            
            $return['driver_id'] =  $location->driver->id;
            $return['driver_lat'] =  $location->latitude;
            $return['driver_long'] =  $location->longitude;
            $return['driver_other'] =  $location->other;
            
            $response['body'][] = $return;
            
        }
        //dd($location);
        return response()->json($response);
    }
    
    public function token(){
        return csrf_token();
    }
}