<header class="njsheader">
	<div class="container-fluid">
		<div class="row">
			<div class="col-4 col-md-4 ccmenuleft">
				<!-- Offcanvas Menu Hamburger Button -->
				<span><a href="javascript:;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><img src="{{asset('assets/images/menu.svg')}}" /></a></span>
			</div>
			<div class="col-8 col-md-4">
				<!-- Offcanvas Menu Hamburger Button -->
				<span><a href="https://notjustswipe.com/"><img class="logo" src="{{asset('assets/images/logo.svg')}}" /></a></span>
			</div>
			<div class="col-12 col-md-4 ccmenuright">
				<div class="njshright">
                    @if(session('role'))
                        <a href="{{URL::to('/logout')}}" class="cbtnstyle1">Log out</a>
                    @else
					    <a href="{{URL::to('/login')}}" class="cbtnstyle1">Log in</a>
                    @endif
					<a href="{{URL::to('/signup')}}" class="cbtnstyle2">Sign up</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Offcanvas Menu -->
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
		<div class="offcanvas-header">
			<div class="profile-avtar">
				<span><img src="{{asset('assets/images/profile-avtar.svg')}}" /></span>
				<span>
					<h5>REHINA D.</h5>
				</span>
			</div>
			<!-- <div class="logout-main">
				<button type="button" class="btn btn-primary0 cbtnstyle-logout">
					Logout
				</button>
			</div> -->
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>

		<div class="offcanvas-body sidebarmenu">
    <ul class="list-unstyled">
        <li>
            <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}" 
               data-inactive-src="{{asset('assets/images/sm-3.svg')}}" 
               data-active-src="{{asset('assets/images/sm-1.svg')}}">
                <img src="{{ Request::is('/') ? asset('assets/images/sm-1.svg') : asset('assets/images/sm-3.svg') }}" alt="">Home
            </a>
        </li>
        <li>
            <a href="aboutUs" class="nav-link {{ Request::is('aboutUs') ? 'active' : '' }}" 
               data-inactive-src="{{asset('assets/images/abouticon-blue.svg')}}" 
               data-active-src="{{asset('assets/images/abouticon-white.svg')}}">
                <img src="{{ Request::is('aboutUs') ? asset('assets/images/abouticon-white.svg') : asset('assets/images/abouticon-blue.svg') }}" alt="">About us
            </a>
        </li>
        <li>
            <a href="{{route('event')}}" class="nav-link {{ Request::is('event') ? 'active' : '' }}" 
               data-inactive-src="{{asset('assets/images/eventicon-blue.svg')}}" 
               data-active-src="{{asset('assets/images/eventicon-white.svg')}}">
                <img src="{{ Request::is('event') ? asset('assets/images/eventicon-white.svg') : asset('assets/images/eventicon-blue.svg') }}" alt="">Events
            </a>
        </li>
        <li>
            <a href="#" class="nav-link {{ Request::is('faq') ? 'active' : '' }}" 
               data-inactive-src="{{asset('assets/images/faqicon-blue.svg')}}" 
               data-active-src="{{asset('assets/images/faqicon-white.svg')}}">
                <img src="{{ Request::is('faq') ? asset('assets/images/faqicon-white.svg') : asset('assets/images/faqicon-blue.svg') }}" alt="">FAQ
            </a>
        </li>
        <li>
            <a href="#" class="nav-link {{ Request::is('help') ? 'active' : '' }}" 
               data-inactive-src="{{asset('assets/images/helpicon-blue.svg')}}" 
               data-active-src="{{asset('assets/images/helpicon-white.svg')}}">
                <img src="{{ Request::is('help') ? asset('assets/images/helpicon-white.svg') : asset('assets/images/helpicon-blue.svg') }}" alt="">Help
            </a>
        </li>
        <li>
            <a href="#" class="nav-link {{ Request::is('settings') ? 'active' : '' }}" 
               data-inactive-src="{{asset('assets/images/settingicon-blue.svg')}}" 
               data-active-src="{{asset('assets/images/settingicon-white.svg')}}">
                <img src="{{ Request::is('settings') ? asset('assets/images/settingicon-white.svg') : asset('assets/images/settingicon-blue.svg') }}" alt="">Settings
            </a>
        </li>
    </ul>
</div>


	</div>
</header>