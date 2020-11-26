@extends('layouts.admin')

@section('content')
<div class="page-container">
    <div class="main-content">
    <div class="row justify-content-center">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                
            @endif
                            <div class="card-header">BUG</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">BUG INFO</h3>
                                </div>
                                <hr>
                                
                                <form action="{{route('buglists.store')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                <div class="row">
                                <div class="col-6">
                                        <label for="title" class="control-label mb-1">BUG TTTLE</label>
                                        <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                    </div>
                                    <div class="form-group ">
                                        <label for="project" class="control-label mb-1">PROJECT</label>
                                        <div>
                                        <select name="status" class="mdb-select md-form colorful-select dropdown-primary" id="exampleFormControlSelect1">
                                            @if (count($project)>0)
                                            @foreach ($project as $project)
                                        <option value="{{$project->id}}">{{$project->title}}</option>
                                             @endforeach
                                            
                                             @endif
                                           
                                          </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">BUG DESCRIPTION</label>
                                        <input id="description" name="description" type="textarea" class="form-control cc-number identified visa" value="" data-val="true">
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>
                                    
                                    <div style='margin:auto'>
                                        <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <p class= "text-center">
                                            <span id="btn btn-primary ">ADD BUG</span>
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
    </div>
</div>
</div>
</div>


@endsection
