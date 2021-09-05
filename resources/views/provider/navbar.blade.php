<nav class="navbar navbar-expand-lg navbar-dark bg-dark username-div">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/provider')}}"> One App</a>
      @if (Auth::guard('provider')->check())
      
      
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 username ">
          
          <li class="nav-item dropdown " >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{auth()->guard('provider')->user()->username}}
            </a>
            <ul class="dropdown-menu see" aria-labelledby="navbarDropdown">
             
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li ><a style="color:red" class="dropdown-item" href="{{url('provider/logout')}}">logout</a></li>
            </ul>
          </li>
        </ul>
        
     
    </div>
      @endif
</div>
  </nav>