	<!-- Header
	============================================= -->
	<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
		
		
		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						
						<ul>
							<!-- <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i><i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
						<li><a href="#">Logout <i class="icon-signout"></i></a></li>
					</ul> -->
					
					<li><a href="<?php echo url(); ?>/en">Eng</a></li>
					<li><a href="<?php echo url(); ?>/mn">ျမန္မာ</a></li>
					@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">Login</a>
						<div class="top-link-section">
							
							@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<form method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="input-group" id="top-login-username">
									<span class="input-group-addon"><i class="icon-user"></i></span>
									<input type="email" class="form-control" placeholder="အီး​ေမးလ္​" name="email" value="{{ old('email') }}">
								</div>
								<div class="input-group" id="top-login-password">
									<span class="input-group-addon"><i class="icon-key"></i></span>
									<input type="password" class="form-control" placeholder="စကားဝွက္" name="password">
								</div>
								<label class="checkbox">
									<input type="checkbox" value="remember-me"> Remember me
								</label>
								
							</br>
							<button class="btn btn-danger btn-block" type="submit">ဝင္ေရာက္ရန္</button>
						</form>

						<a href="{{ url('/auth/register') }}"><button class="btn btn-danger btn-block" type="submit">Register</button></a>
					</div>
				</li>
				@else
				@if(Auth::user()->photourl!="")
				<!-- <li><a href=""><img src="{{ Auth::user()->photourl }}" width="25" height="25" class="img-circle"> <span>{{ substr(Auth::user()->name,0, 5) }}</span></a> -->
				<li><a href=""><img src="{{ Auth::user()->photourl }}" width="25" height="25" class="img-circle"> <span>{{ Auth::user()->name }}</span></a>
					@else
					<li><a href=""><i class="icon-user"></i> <span>{{ Auth::user()->name }}</span></a>
						@endif
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="{{ route("profiles.edit", Auth::user()->id) }}"><i class="icon-user"></i> <span>My Profile</span></a></li>
							<li><a href="{{ url('/auth/logout') }}">ျပန္ထြက္ရန္ <i class="icon-signout"></i></a></li>
						</ul>
					</li>
					@endif
				</ul>
			</div><!-- .top-links end -->

		</div>

		<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+95.9.1234567</span></a></li>
							<li><a href="mailto:info@mymagicalmyanmar.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@mymagicalmyanmar.com</span></a></li>
							
							
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->
		
		
		

		<div id="header-wrap" >

			<div class="container clearfix">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="<?php echo url(); ?>/images/logo-dark.png"><img src="<?php echo url(); ?>/images/logo.png" alt="Canvas Logo"></a>
						<a href="/" class="retina-logo" data-dark-logo="<?php echo url(); ?>/images/logo-dark@2x.png"><img src="<?php echo url(); ?>/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul>
							<li class="current"><a href="#"><div>ပင္မစာမ်က္ႏွာ</div></a>
								
							</li>
							<li><a href="magazine.html"><div>မဂၢဇင္​း</div></a>
								
							</li>
							<li><a href="booking.html"><div>Booking</div></a>
								
							</li>
							<li><a href="joinus.html"><div>Join Us</div></a>
								
							</li>
						</ul>
						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->