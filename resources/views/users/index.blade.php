@extends('layouts.admin')

@section('content')
<div class="main-content">
    @if (count($user)>0)
   
    
    
   
            
        <div class="row justify-content-center">
            
            <div>
                  
                    <table class="table table-striped">
                        <thead class="thead-dark">
                      
                            <tr>
                                <th scope="col">USERNAME</th>
                                <th scope="col">FULL NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">DESIGNATION</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                            <tr>
                               
                                <td scope="col"><a href="users/{{$user->id}}/edit">{{$user->username}}</a></td>
                                <td scope="col">{{$user->fullname}}</td>
                                <td scope="col">{{$user->email}}</td>
                                <td scope="col">{{$user->designation}}</td>
                              </tr>
                              @endforeach
                        </tbody>
                      
                    </table>


      </div>
      
    
    </div>

    
        
    @endif    



</div>


@endsection