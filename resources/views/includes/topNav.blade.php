<!--// TopStrip \\-->
<div class="wm-topstrip">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wm-language">
					<ul>
						<li><a href="#">English</a>
						</li>
						<li><a href="#">Bangla</a>
						</li>
					</ul>
				</div>
				<ul class="wm-stripinfo">
					<li><i class="wmicon-location"></i> {{$data['address']}}</li>
					<li><i class="wmicon-technology4"></i> {{$data['phone']}}</li>
					<li><i class="wmicon-clock2"></i> {{$data['time']}}</li>
				</ul>
				<ul class="wm-adminuser-section">
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

                                <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown" style="background-color:#222845;margin-top:15px;text-align:center">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
					{{-- <li> <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a> --}}
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
            