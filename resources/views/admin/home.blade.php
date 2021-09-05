
@extends('admin.index')

@section('dashboard')
<div class="main">
    <h1> Admin dashboard</h1>


    <br> <br>

    
</div>


<div class="">
    <div class="container main">
        <div class="row beside">
          
           
            <div class="col">
              
                <div class="card " style="width: 10rem;">
                 <div class="card-header">
                  <p> Providers </p>
                 </div>
                 <span style="text-align: center;color:gray;font-size: x-large;">{{$count}}</span><br>
                 <a  style="text-align:center" href="{{url('admin/providers')}}">show All providers </a>    
               </div>
           
           </div>
        
   
        </div>
    </div>
</div>


@endsection
