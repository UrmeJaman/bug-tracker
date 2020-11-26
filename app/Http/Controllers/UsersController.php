<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=User::all();
        if(auth()->user()->username!=='admin'){
            return redirect ('/home')->with('error','CAN NOT ACCESS');
        }
        //return view('pages.index')->with('user',$user); 
        return view('users.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('users.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username'=>'required',
            'fullname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'designation'=>'required'
        ]);
         $user= new User;
         $user->username=$request->input('username');
         $user->fullname=$request->input('fullname');
         $user->email=$request->input('email');
         $user->password=bcrypt($request->input('password'));
         $user->designation=$request->input('designation');
         $user->status=$request->input('status');
         $user->save();
         return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find($id);
        if(auth()->user()->username!=='admin'){
            return redirect ('/home')->with('error','CAN NOT ACCESS');
        }
        return view('users.edit')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'username'=>'required',
            'fullname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'designation'=>'required'
        ]);
        $user=User::find($id);
        $user->username=$request->input('username');
         $user->fullname=$request->input('fullname');
         $user->email=$request->input('email');
         $user->password=bcrypt($request->input('password'));
         $user->designation=$request->input('designation');
         $user->status=$request->input('status');
         $user->save();
         return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}