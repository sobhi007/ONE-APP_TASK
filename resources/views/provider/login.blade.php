

@extends('provider.index')

@section('provider_login')



<div class="main">
    <div class="sub-main">
        <h1>Provider Login</h1>
        <form action="{{url('provider/check')}}" method="POST">
            @csrf
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
                <label for="inputPassword" class="col-sm-4 col-form-label" >Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" value="{{old('password')}}" name="password">
                <span>  {{session()->get('error')}} </span> 
                @error('password')
              <span>  {{$message}} </span>
            @enderror    
            </div>
               
            </div>
        
             <div>
                 <input type="checkbox" name="remeber_me" id="remeber_me">
                 <label for="remeber_me">Remember me </label>
            </div>
            <button type="submit" class="btn btn-primary login-btn">Login</button>
        </form>
    </div>

</div>






@endsection





