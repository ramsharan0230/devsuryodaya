<header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="{{ route('admin.home.index') }}" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-40">
			  {{-- <span class="light-logo"><img src="{{ asset('assets/img/logo.jpeg') }}" alt="logo"></span> --}}
			  <span class="dark-logo"><img src="{{ asset('assets/img/logo.jpeg') }}" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="{{ asset('assets/img/logo.jpeg') }}" alt="logo"></span>
			  <span class="dark-logo"><img src="{{ asset('assets/img/logo.jpeg') }}" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>					  
			<!-- Control Sidebar Toggle Button -->
			<li class="btn-group d-md-inline-flex d-none">
				<a href="javascript:void(0)" title="skin Change" class="waves-effect skin-toggle waves-light">
				<label class="switch">
					<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
					<span class="switch-on"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></span>
				<span class="switch-off"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></span>
				</label>
				</a>
			</li>
			
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="dropdown">
					<img src="{{ asset('assets/img/logo.jpeg') }}" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
				</a>
				<div class="dropdown-menu">
					<?php $user = \App\Models\User::where('id', Auth::id())->first();  ?>
					<a class="dropdown-item my-5" href="{{ route('admin.profile', $user->username) }}">My Profile</a>
					<a class="dropdown-item my-5" href="{{ route('admin.logout.perform') }}">Logout</a>
			    </div>
			</li>
        </ul>
      </div>
    </nav>
  </header>