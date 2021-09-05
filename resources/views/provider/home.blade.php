
@extends('provider.index')

@section('provider_dashboard')


<h2 style="text-align: center"> Provider Dashboard</h2>
@if ($total_location >= 5)
<p style="color:red;text-align:center">You have reached the maximum number of Locations</p>

@else
<div style="margin-left: 280px;">
  <a href="{{url('provider/add_location')}}" class="btn btn-primary">add new location</a>
  </div>
@endif

<br>

<p style="color:green;text-align:center">{{session()->get('succ')}}</p>
<p style="color:red;text-align:center">{{session()->get('err')}}</p>

<br>
<div class="main">
    

    <br>

<div style="display: flex;justify-content: center;">
   
<div  style="width: 800px;">
<table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">longitude</th>
       <th scope="col">latitude</th>
     </tr>
   </thead>
   <tbody>
@php
    $x=1;
@endphp
       @foreach ($locations as $location)
      <tr>
         <th scope="row">@php echo $x++; @endphp</th>
         <td>{{$location->longitude}}</td>
         <td>{{$location->latitude}}</td>
        
       </tr>
      @endforeach
   
     
   </tbody>
 </table>
 
</div>
</div>

    
</div>

@endsection
