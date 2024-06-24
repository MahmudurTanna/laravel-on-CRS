<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Course;

// abstract class Controller
class Controller extends BaseController
{
    //


    public function login(){
        return view('front.login');
    }


    public function login_user(Request $request){
        // dd($request->id);

        $credentials = $request->only('varsity_id', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
    }


    public function logout(Request $request){
        auth()->logout();
        return redirect()->route('login');
    }


    public function signup(){
        return view('front.signup');
    }


    public function create_user(Request $request){
        // dd($request->all());

        // validation

        // create user in the database
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'varsity_id' => $request->varsity_id,
            'password' => $request->password,
        ]);
        // $user->save();

        if($user->save()){
            //login
            auth()->login($user);
            // dashboard
            return redirect()->route('dashboard');
        }else{
            // redirect last page
            return redirect()->back();
        }

        // login after creating user successfully
    }


    public function dashboard(){
        return view('front.dashboard');
    }








    public function courses(){
        return view('front.courses');
    }


    public function course_create(Request $request){
        //create course in database
        $courses = new Course([
            'course_name' => $request->course_name,
            'course_code' => $request->course_code ,
            'course_credit' => $request->course_credit,
            
        ]);

        if($courses->save()){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
        
    }
}
