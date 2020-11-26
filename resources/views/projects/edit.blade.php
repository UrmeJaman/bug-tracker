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
                            <div class="card-header">PROJECT</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">PROJECT INFO</h3>
                                </div>
                                <hr>
                                
                                <form action="{{route('projects.update',$project->id)}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT" />
                                <div class="form-group">
                                <div class="row">
                                <div class="col-6">
                                        <label for="title" class="control-label mb-1">TTTLE</label>
                                        <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$project->title}}" >
                                    </div>
                                  
                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">DESCRIPTION</label>
                                    <input id="description" name="description" type="tel" class="form-control cc-number identified visa" value="{{$project->description}}" data-val="true">
                                      
                                    </div>
                                    
                                    <div style='margin:auto'>
                                        <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <p class= "text-center">
                                            <span id="btn btn-primary ">UPDATE PROJECT</span>
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
