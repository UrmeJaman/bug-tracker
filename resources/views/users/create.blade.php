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
                            <div class="card-header">USER</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">USER INFO</h3>
                                </div>
                                <hr>
                                
                                <form action="{{route('users.store')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                <div class="row">
                                <div class="col-6">
                                        <label for="username" class="control-label mb-1">USERNAME</label>
                                        <input id="username" name="username" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                  
                                    <div class="form-group">
                                        <label for="fullname" class="control-label mb-1">FULLNAME</label>
                                        <input id="fullname" name="fullname" type="tel" class="form-control cc-number identified visa" value="" data-val="true">
                                      
                                    </div>
                                    <var><div class="form-group">
                                        <label for="email" class="control-label mb-1">EMAIL</label>
                                        <input id="email" name="email" type="tel" class="form-control cc-number identified visa" value="" data-val="true">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label mb-1">PASSWORD</label>
                                        <input id="password" name="password" type="tel" class="form-control cc-number identified visa" value="" data-val="true">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="designation" class="control-label mb-1">DESIGNATION</label>
                                        <input id="designation" name="designation" type="tel" class="form-control cc-number identified visa" value="" data-val="true">
                                      
                                    </div></var>
                                    <select name="status" class="mdb-select md-form colorful-select dropdown-primary" id="exampleFormControlSelect1">
                                        <option value="true">ACTIVE</option>
                                        <option value="false">INACTIVE</option>
                                       
                                      </select>
                                     
                                    
                                    <div style='margin:auto'>
                                        <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <p class= "text-center">
                                            <span id="btn btn-primary ">ADD USER</span>
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
