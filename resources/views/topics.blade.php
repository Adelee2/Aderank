@extends('template')
@section('content-wrapper')

<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url('{{ asset('education/images/img_bg_4.jpg') }}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Topics</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Select Categories</h2>
					<p>Select a topic category</p>
				</div>
			</div>
			<div class="row">
				@foreach($result as $data)
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url('{{ asset('education/images/project-1.jpg') }}');">
						</a>
						<div class="desc">
							<h3><a href="#">{{$data->category_name}}</a></h3>
							<p>{{$data->cat_description}}</p>
							<span><a onclick="gotolink({{$data->cat_id}})" class="btn btn-success btn-sm btn-course">Select Category</a></span>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function gotolink(id){
			console.log(id);
			window.location.href='/topics/cat-subcat/'+id;
		}
	</script>
@endsection