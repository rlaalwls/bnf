<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;

class Front extends Controller

{
        
    public function main(Request $request){
        
        $return_list = array();

        return view('index', $return_list);
    }

    public function introduction(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'greeting'){
            $view_url .= '/introduction/greeting';
        }
        if($request->segment(2) == 'history'){
            $view_url .= '/introduction/history';
        }
        if($request->segment(2) == 'organization'){
            $view_url .= '/introduction/organization';
        }
        if($request->segment(2) == 'location'){
            $view_url .= '/introduction/location';
        }
     
        return view('sub/'.$view_url, $return_list);
    }

    public function product(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(3) == 'rebber'){
            $view_url .= '/product/tomoe/rebber';
        }
        if($request->segment(3) == 'high'){
            $view_url .= '/product/tomoe/high';
        }
        if($request->segment(3) == 'terlon'){
            $view_url .= '/product/tomoe/terlon';
        }
        if($request->segment(3) == 'rotary'){
            $view_url .= '/product/tomoe/rotary';
        }
        if($request->segment(3) == 'check'){
            $view_url .= '/product/tomoe/check';
        }
        if($request->segment(3) == 'glode'){
            $view_url .= '/product/koso/glode';
        }
     
        return view('sub/'.$view_url, $return_list);
    }

    public function data_room(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'data_room'){
            $view_url .= '/data_room/data_room';
        }
     
        return view('sub/'.$view_url, $return_list);
    }
    public function customer(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'customer'){
            $view_url .= '/customer/customer';
        }
     
        return view('sub/'.$view_url, $return_list);
    }
    public function contact_us(Request $request){

        $return_list = array();

        $view_url = '';
        
       
        if($request->segment(2) == 'contact_us'){
            $view_url .= '/contact_us/contact_us';
        }
     
        return view('sub/'.$view_url, $return_list);
    }
    
    

}
?>