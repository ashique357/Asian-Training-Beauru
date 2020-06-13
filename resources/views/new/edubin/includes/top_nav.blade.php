<div class="header-top d-none d-lg-block">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="header-contact text-lg-left text-left">
               <ul>
                  <li><img src="{{asset('new/images/all-icon/map.png')}}" alt="icon"><span>{{$data['address']}}</span></li>
                  <!-- <li><img src="{{asset('images/all-icon/email.png')}}" alt="icon"><span>{{$data['phone']}}</span></li> -->
               </ul>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="header-opening-time text-lg-left text-left">
               <p>Open/Close: {{$data['time']}}</p>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="login-register">
               <ul>
                  @guest
                  <li> <a href="/login" data-toggle="" data-target="">login</a></li>
                  @if (Route::has('register'))
                  <li> <a href="/register" data-toggle="" data-target="">Register</a>
                     @endif
                     @else
                  <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item drop-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </div>
                  </li>
                  @if(Auth::user()->role ==1 || Auth::user()->member !=0)
                  @if(Auth::user()->role ==1)
                  <li>
                     <a class="dropdown-item" href="/admin/dashboard">
                     {{ __('Dashboard') }}
                     </a>
                  </li>
                  @endif
                  @elseif(Auth::user()->member !=0)
                  <li>
                     <a class="dropdown-item" href="/dashboard">
                     {{ __('Dashboard') }}
                     </a>
                  </li>
                  @endif
                  @endguest
               </ul>
            </div>
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</div>
<!-- header top -->


