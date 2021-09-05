
@extends('admin.index')

@section('providers')
<br>
<h2 style="text-align: center">All Providers</h2>
<div style="margin-left: 280px;">
<a href="{{url('admin/add_providor')}}" class="btn btn-primary">add new providor</a>
</div>
<br>

<p style="color:green;text-align:center">{{session()->get('succ')}}</p>
<p style="color:red;text-align:center">{{session()->get('err')}}</p>

<br>
<div style="display: flex;justify-content: center;">
   
<div  style="width: 800px;">
<table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">name</th>
       <th scope="col">username</th>
       <th scope="col">email</th>
     </tr>
   </thead>
   <tbody>
@php
    $x=1;
@endphp
      @foreach ($providers as $provider)
      <tr>
         <th scope="row">@php echo $x++; @endphp</th>
         <td>{{$provider->name}}</td>
         <td>{{$provider->username}}</td>
         <td>{{$provider->email}}</td>
       </tr>
      @endforeach
     
     
   </tbody>
 </table>
 <div class="main">{{ $providers->links()}}</div>
</div>
</div>
@endsection