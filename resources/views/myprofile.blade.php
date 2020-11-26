@extends('layouts.admin')
@section('content')


  

  
    <!-- MAIN CONTENT-->
 <div class="main-content">
  
                    


    <div class="card-profile">
      
       
        <h1> {{ $user->username}}</h1>
        <p class="title">{{ $user->designation}}</p>
       
        <h2>{{ $user->fullname}}</h2>
        <a href="#"> {{ $user->email}}</a>
        
      
        
    </div>
 

 </div>
 @endsection