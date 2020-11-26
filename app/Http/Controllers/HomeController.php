<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\buglist;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
  
    public function index()
    {
       
        
            $bug=buglist::all();
            if(count($bug)>0){
            $close=0;
                $open=0;
                $fixed=0;
                foreach($bug as $bug)
                {
                    if(($bug->bugStatus)=='CLOSE')
                    {
                       $close++;
                    }
                    else if (($bug->bugStatus)=='OPEN')
                    {
                          $open++;
                    }
                    else 
                    {
                         $fixed++;
                    }

                }

            }
        
        $user= User::all();
        $project=Project::all();
        $bug=buglist::all();
       // $home = new HomeController;
       // $home->buglist();
       
       return view('home')->with('user',$user)->with('project',$project)->with('bug',$bug)->with('close',$close)->with('open',$open)->with('fixed',$fixed);
    }
    public function profile(){

        $id=auth()->user()->id;
        $user=User::find($id);
        return view('myprofile')->with('user',$user);
      


    }
}