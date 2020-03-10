<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url('education/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url('education/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('education/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('education/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url('education/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ url('education/css/owl.theme.default.min.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ url('education/css/flexslider.css') }}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ url('education/css/pricing.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('education/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js">

	<!-- Modernizr JS -->
	<script src="{{ url('education/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

		<div id="fh5co-contact">
			<div class="container">
				<div class="row">
						@if($success !== "")
							<div style="text-align: center;" class="alert alert-success" role="alert">{{$success }}</div>
						@endif
						@if($errors !== "")
							<div style="text-align: center;" class="alert alert-danger" role="alert">{{$errors}}</div>
						@endif
						@if(Session::has('successes'))
							<div style="text-align: center;" class="alert alert-success" role="alert">{{Session::get('successes') }}</div>
						@endif
						@if(Session::has('error'))
							<div style="text-align: center;" class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
						@endif
					<div class="col-md-5 col-md-push-1 animate-box">
						
						<!-- <div class="fh5co-contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
								<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
								<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
								<li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li>
							</ul>
						</div> -->

					</div>
					<div class="col-md-6 animate-box" style="">
						
						<div style=""><h3>Register</h3></div>
						
						<form action="/registeruser" method="post">
							{{ @csrf_field()}}
							<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" name="firstname" class="form-control" placeholder="Your firstname" required="required">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" name="lastname" class="form-control" placeholder="Your lastname" required="required">
							</div>
						</div>
							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required="required">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="password" id="pass1" name="password" class="form-control" placeholder="password" required="required">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="password" id="pass2" name="confirmpass" class="form-control" placeholder="Confirm password" required="required">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-3"></div>
								<div class="col-md-3"><a href="/login" >go to login</a></div>
							</div>
							<div class="form-group">
								<input onmouseover="checkpass()" id="butt" type="submit" placeholder="Register" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
				
			</div>
		</div>


	</div>

	
	<!-- jQuery -->
	<script src="{{ url('education/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ url('education/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ url('education/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ url('education/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ url('education/js/jquery.stellar.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ url('education/js/owl.carousel.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ url('education/js/jquery.flexslider-min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ url('education/js/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ url('education/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ url('education/js/magnific-popup-options.js') }}"></script>
	<!-- Count Down -->
	<script src="{{ url('education/js/simplyCountdown.js') }}"></script>
	<!-- Main -->
	<script src="{{ url('education/js/main.js') }}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });
   	function checkpass(){
   		let pass1= $('#pass1').val();
   		let pass2 = $('#pass2').val();

   		if(pass1 !=="" || pass2 !==""){
   			if(pass1!==pass2){
   				alert("password do not match!");

   				$('#pass2').focus();
   				$('#pass2').css({'border':'2px solid red'});
   				// $('#butt').prop("disabled", true);
   			}else{
   				$('#pass2').css({'border':'2px solid rgba(0, 0, 0, 0.1)'});
   			}
   		}
   	}
    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

