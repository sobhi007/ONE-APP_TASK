

@extends('provider.index')

@section('add_location')



<div class="main">
    <div class="sub-main">
        <h1>Add New Location</h1>
        <form action="{{url('provider/store_location')}}" method="POST">
            @csrf
            <div class="mb-4 row">
                <label for="longitude" class="col-sm-4 col-form-label">longitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{old('longitude')}}">
                @error('longitude')
            <span>   {{$message}} </span> 
            @enderror
            </div>
               
            </div>
            <div class="mb-4 row">
                <label for="latitude" class="col-sm-4 col-form-label" >latitude</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="latitude" value="{{old('latitude')}}" name="latitude">
                <span>  {{session()->get('error')}} </span> 
                @error('latitude')
              <span>  {{$message}} </span>
            @enderror    
            </div>
               
            </div>
        
             <input type="hidden" name="provider_id" value="{{auth()->guard('provider')->user()->id}}">
            <button type="submit" class="btn btn-primary login-btn">Submit</button>
        </form>
    </div>

</div>






@endsection





