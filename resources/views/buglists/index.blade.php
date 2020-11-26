@extends('layouts.admin')

@section('content')
    @if (count($buglist)>0)

    
    <div class="main-content" >
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-4">
                <table class="table table-striped">
                    <thead class="thead-dark">
    
                        <tr>
                            <th scope="col">TITLE</th>
                            <th scope="col">PROJECT</th>
                            <th scope="col">DESCRIPTION</th>
                            
                        </tr> 
                    </thead>
                   
    @foreach ($buglist as $bug)
    
                        <tr>
                                                            
                            <td scope="col"><a href="{{($bug->id)}}/edit">{{$bug->bugtitle}}</a></td>
                            

                            
                            
                                
                            <td scope="col">{{$bug->project->title}}</td>
                            <td scope="col">{{$bug->bugdescription}}</td>

                        </tr>
    
                   
    @endforeach
</table>
</div>
      </div>
      @endif
    </div>
    
        

        
       





@endsection