	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<!-- <p class="site">www.yourdomainname.com</p> -->
						<!-- <p class="num">Call: +01 123 456 7890</p> -->
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>Aderank<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">

						<ul>
							<li class="active"><a href="{{ url('/')}}">Home</a></li>
							<li><a href="{{ url('/topics') }}">Topics</a></li>
							<!-- <li><a href="teacher.html">Teacher</a></li> -->
							<!-- <li><a href="about.html">About</a></li>
							<li><a href="pricing.html">Pricing</a></li> -->
							<!-- <li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li> -->
							<li><a href="contact.html">Contact</a></li>
							@if(\Session::has('key'))
								<li></li>
							@else
								<li class="btn-cta"><a href="{{ url('/login') }}"><span>Login</span></a></li>
							@endif

							@if(\Session::has('key'))

								<li class="nav-user dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b><strong>{{\Session::get('key')->firstname}} {{\Session::get('key')->lastname}}</strong></a>
                                	<ul class="dropdown-menu">

										<li ><a style="" href="/dashboard/{{\Session::get('key')->token}}">My Dashboard</a></li>
										<li ><a style="" href="/logout">logout</a></li>
									</ul>
								</li>
							@endif
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>