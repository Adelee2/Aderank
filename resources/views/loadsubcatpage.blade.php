@extends('template')
@section('content-wrapper')
@if(!empty($result))
<section>
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">{{$result[0]->category_name}} Section</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id ="col-lg-4 col-md-4">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>{{$result[0]->category_name}}</h2>
					<p>select a sub-category</p>
				</div>
			</div>
			
			<div class="row row-padded-mb">
				@foreach($result as $data)
				<div class="col-lg-4 col-md-4" id="{{$data->id}}" onmouseover="getshadow({{$data->id}})" >
					<div class="fh5co-event animate-box" style="padding-left: 20px;">
						<a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">{{$data->sub_category}}</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p><small>{{$data->subcat_description}}</small></p>
							<span><a onclick="gotolink({{$data->id}})" class="btn btn-success btn-sm btn-course">Solve Questions</a></span>
						</div> 
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

@else
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">No question yet</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
@endif

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	function getshadow(val){
		// console.log(val);
		var elem  = document.getElementById(val);
			elem.style.boxShadow= "5px 10px 10px #888888";

		$('#'+val).mouseout(function(){
			$('#'+val).css("box-shadow","0px 0px 0px");
		});
	}
	// $(document).ready(function(){
		
	// })
		function gotolink(id){
			console.log(id);
			window.location.href='/topics/cat-subcat/'+id;
		}
</script>
@endsection