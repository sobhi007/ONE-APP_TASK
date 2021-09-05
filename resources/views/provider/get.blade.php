



@extends('provider.index')

@section('provider_get_location')

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



@endsection