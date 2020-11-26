<?php

namespace App\Http\Controllers;

use App\Models\buglist;
use Illuminate\Http\Request;
use App\Models\Project;


class BuglistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $project= Project::all() ;
      
    return view('buglists.create')->with('project',$project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $buglist= buglist::all();
    $project=Project::all();
     return view('buglists.index')->with('buglist',$buglist)->with('project',$project);;
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
           'title'=>'required',
           'description' =>'required',
           'project'=>'reqired',    
         

       ]);
        $buglist= new buglist;
        $buglist->bugtitle=$request->input('title');

        $buglist->bugdescription=$request->input('description');
        $buglist->project_id=$request->input('status');
        $buglist->bugStatus=('OPEN');
        $buglist->save();
        return redirect('buglists/create');
        //return   $buglist->project_id=$request->input('status');



    }

    /**bu
     * Display the specified resource.
     *
     * @param  \App\Models\buglist  $buglist
     * @return \Illuminate\Http\Response
     */
    public function show(buglist $buglist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buglist  $buglist
     * @return \Illuminate\Http\Response
     */
    public function edit(buglist $buglist)
    {
         $project= Project::all();
        return view ('buglists.edit')->with('buglist',$buglist)->with('project',$project);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buglist  $buglist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description' =>'required',
            'project'=>'reqired',    
          
 
        ]);

      
         $buglist=  buglist::find($id);
         $buglist->bugtitle=$request->input('title');
         $buglist->bugdescription=$request->input('description');
         $buglist->project_id=$request->input('status');
       
         $buglist->bugStatus=$request->input('bugstatus');
         
      
         $buglist->save();
         return redirect('buglists/create');
 
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buglist  $buglist
     * @return \Illuminate\Http\Response
     */
    public function destroy(buglist $buglist)
    {
        //
    }
}