

@extends('admin.index')

@section('add_provider')



<div class="main">
    <div class="sub-main">
        <h1>Add new provider</h1>
        <form action="{{url('admin/store_provider')}}" method="POST">
            @csrf
            <div class="mb-4 row">
                <label for="name" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
            <span>   {{$message}} </span> 
            @enderror
            </div>
               
            </div>
            <div class="mb-4 row">
                <label for="username" class="col-sm-4 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}">
                @error('username')
            <span>   {{$message}} </span> 
            @enderror
            </div>
               
            </div>
            <div class="mb-4 row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                @error('email')
            <span>   {{$message}} </span> 
            @enderror
            </div>
               
            </div>
            <div class="mb-4 row">
                <label for="inputPassword" class="col-sm-4 col-form-label" >Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" value="{{old('password')}}" name="password">
                <span>  {{session()->get('error')}} </span> 
                @error('password')
              <span>  {{$message}} </span>
            @enderror    
            </div>
               
            </div>
        
         
            <button type="submit" class="btn btn-primary login-btn">submit</button>
        </form>
    </div>

</div>






@endsection





