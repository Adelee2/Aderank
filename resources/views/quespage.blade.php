@extends('template')
@section('content-wrapper')
<!-- 	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Data Structures Section</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside> -->
	<!-- {{$status = ""}} -->
	<section>
		<div class="container">
			<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
				
				<div class="col-md-12 animate-box">
					<div style="height: 155vh; width: 100%;" class="overlay"></div>
					<form action="#">
						<div class="row form-group animate-box">
							<textarea disabled="disabled" style="width: 100%; height: 100vh; font-size: 14px; ">
									{{$result[0]->questions}}
								</textarea>
							
						</div>
						<!-- <p>RUN YOUT CODE HERE!!</p> -->
						<div class="row form-group animate-box">
								<!-- <label for="subject">Subject</label> -->
								<div id="editor" style="width: 100%; height: 100vh; max-height: 50vh;">
								</div>
							<!-- </div> -->
						</div>
						<div class="form-group animate-box">
							<input type="submit" value="Run" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
		</div>
	</section>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		function gotolink(id){
			console.log(id);
			window.location.href='/topics/loadquestion/'+id;
		}
		var aceEditor =ace.edit("editor");
		// defines the style of the editor
	// aceEditor.setTheme("ace/theme/monokai");
	// hides line numbers (widens the area occupied by error and warning messages)
	aceEditor.renderer.setOption("showLineNumbers", true); 
	aceEditor.session.setMode("ace/mode/javascript");
	
		aceEditor.setOptions({
		   enableBasicAutocompletion: true, // the editor completes the statement when you hit Ctrl + Space
		   enableLiveAutocompletion: true, // the editor completes the statement while you are typing
		   showPrintMargin: false, // hides the vertical limiting strip
		   maxLines: Infinity,
		   fontSize: "100%" // ensures that the editor fits in the environment
		});
	
	</script>
@endsection