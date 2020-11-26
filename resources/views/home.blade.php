@extends('layouts.admin')
@section('content')


  

  
    <!-- MAIN CONTENT-->
    <div class="main-content">
   
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
                        @auth
                            {{'Hello '}}{{auth()->user()->username}}
                            {!! '<br/>'!!}
                        @endauth
                            
        <div class="section__content section__content--p30">
            
          
                
            
            <div class="row m-t-25">
                    
                <div style="padding-right:20px ">
                    @if ((auth()->user()->designation=='admin'))
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                            
                                <div  class="overview-chart">
                            
                                    @if (count($user)>0)
                                    {{'TOTAL USER : '}}{{count($user)}}
                                        
                                    @endif
                                </div>
                            </div>
                                
                        </div>   
                           
                
                    </div>
                     @endif  
                </div>
            
                    
                
                            
                 <div style="padding-right:20px ">  
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                
                                    <div  class="overview-chart">
                                
                                        @if (count($project)>0)
                                        {{'TOTAL PROJECT: '}}{{count($project)}}
                                            
                                        @endif
                                    </div>
                                </div>  
                             </div>
                        </div>
                 </div>
                 <div style="padding-right:20px ">  
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                
                                    <div  class="overview-chart">
                                
                                        @if (count($bug)>0)
                                        {{'TOTAL BUG: '}}{{count($bug)}}
                                        
                                         
                                       
                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div style="padding-right:20px ">  
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                
                                    <div  class="overview-chart">
                                
                                        @if (count($bug)>0)
                                        
                                         {{'BUG CLOSED : '}}   {{$close}}
                                         
                                         
                                       
                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="padding-right:20px ">  
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                
                                    <div  class="overview-chart">
                                
                                        @if (count($bug)>0)
                                        
                                         {{'BUG FIXED : '}}   {{$fixed}}
                                  
                                       
                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="padding-right:20px ">  
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                
                                    <div  class="overview-chart">
                                
                                        @if (count($bug)>0)
                                        
                                           
                                         {{'BUG OPEN : '}}   {{$open}}
                                         
                                       
                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    
                       
                 
                
            
            </div> 
                       
            
        </div>   
                    
              
                
    </div> 
    
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->

@endsection


