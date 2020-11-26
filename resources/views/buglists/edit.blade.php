@extends('layouts.admin')

@section('content')

    <div class="main-content">
    <div class="row justify-content-center">
      
        <div class="col-md-6">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                    <form action="{{route('buglists.update',$buglist->id)}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT" />
                    <div class="form-group">
                    <div class="row">
                    <div class="col-6">
                            <label for="title" class="control-label mb-1">BUG TTTLE</label>
                            <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="{{$buglist->bugtitle}}">
                        </div>
                        <div class="form-group ">
                            <label for="project" class="control-label mb-1">PROJECT</label>
                            <div>
                            <select name="status" class="mdb-select md-form colorful-select dropdown-primary" id="exampleFormControlSelect1">
                                @if (count($project)>0)
                                @foreach ($project as $project)
                                <option   value="{{$project->id}}" hidden >{{$buglist->project->title }}</option>
                            <option value="{{$project->id}}">{{$project->title}}</option>
                                 @endforeach
                                
                                 @endif
                               
                              </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label mb-1">BUG DESCRIPTION</label>
                            <input name="description" type="textarea" class="form-control"   value= "{{$buglist->bugdescription}}">
                       
                        </div>
                       
                        <div class="form-group">
                           <div class="row">
                            <div class="col-6 ">
                                
                        <select name="bugstatus" >
                            @if (($buglist->bugStatus)=='OPEN')
                            
                                <option data-support="selected"  > {{$buglist->bugStatus}}</option>
                                <option value="{{'FIXED'}}">{{'FIXED'}}</option>
                         
                                 
                             @else
                             <option data-support="selected"  > {{$buglist->bugStatus}}</option>
                             <option value="{{'CLOSE'}}">{{'CLOSE'}}</option>
        
                            
                             @endif
                           
                          </select>
                            </div>
                        </div>
                        </div>
                        
                        <div style='margin:auto'>
                            <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                <p class= "text-center">
                                <span id="btn btn-primary ">UPDATE BUG</span>
                                </p>
                            </button>
                        </div>
                    </div>
                    </div>
                    </form>
                


                </div>
                    </div>
                                
                </div> 
            </div>
        </div>
    
@endsection
