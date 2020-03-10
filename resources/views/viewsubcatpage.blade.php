@extends('template')
@section('content-wrapper')

	@if(count($result)>0)
		<section>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>{{$result[0]->sub_category}}</h2>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-8 col-lg-8">
						<div class="col-md-12">
								@foreach($result as $data)
								<div class="fh5co-event animate-box shadows" id="{{$data->id}}" onmouseover="getshadow({{$data->id}})" style="border: 1px solid; padding-left: 20px;">
									<div class="desc">
										<h3><a href="#"></a></h3>
										<p>{{substr($data->questions,0,150)}}...<span style="margin-left: 20px;"><a onclick="gotolink({{$data->quesid}})" class="btn btn-primary btn-sm btn-course">Solve</a></span></p>
										<p style="margin-top: -20px;"><label>Difficulty:</label>
											@if($data->difficulty ==1)
												easy
											@elseif($data->difficulty ==2)
													medium
											@elseif($data->difficulty ==3)
													Hard
										@endif
										 </p>
									</div>
								</div>
								@endforeach
						</div>

					</div>
					<div class="col-md-4 col-lg-4">
						<div class="col-md-12">
							<div class="fh5co-event animate-box">	
								<div class="blog-text">
									<h3>select topics</h3>
									<select style="width: 100%" onchange="getcat(this.value)">
										<option value="">select an option</option>
										@foreach($topics as $datacat)
											<option value="{{$datacat->cat_id}}">{{$datacat->category_name}}</option>
										@endforeach

									</select>
								</div> 
							</div>
							<div class="fh5co-event animate-box">
								<div class="blog-text">
									<h3>select Categories</h3>
									<select style="width: 100%" onchange="getsubcat(this.value)">
										<option value="">select an option</option>
										@foreach($subcat as $datasubcat)
											<option value="{{$datasubcat->id}}">{{$datasubcat->sub_category}}</option>
										@endforeach
									</select>
								</div> 
							</div>
						</div>
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
				elem.style.boxShadow= "5px 10px #888888";

			$('#'+val).mouseout(function(){
				$('#'+val).css("box-shadow","0px 0px");
			});
		}
		function gotolink(id){
			console.log(id);
			window.location.href='/topics/loadquestion/'+id;
		}
		function getcat(value){
			console.log(value);
			window.location.href='/topics/loadsubcatpage/'+value;
		}
		function getsubcat(value){
			console.log(value);
			window.location.href='/topics/viewsubcatpage/'+value;
		}
	</script>
@endsection