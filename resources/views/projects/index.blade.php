@extends('layouts.admin')
@section('content')

    @if (count($p)>0)
              
            <div class="main-content">
                    
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-8">
                            
                              
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th scope="col">TITLE</th>
                                                        <th scope="col">DESCRIPTION</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($p as $p)
                                                 <tr>
                                                        
                                                    <td scope="col"><a href="{{($p->id)}}/edit">{{$p->title}}</a></td>
                                                    <td scope="col">{{$p->description}}</td>
                                
                                                </tr>
                                                
    @endforeach
                                                
                                            </tbody>
                                        </table> 
                                    
                                

        

                                    </div>
                
                                </div>
                            </div>
                    </div>
                </div>
                </div>
                
            
                    
    @endif    

            
        


            

                   
            
@endsection