@extends('template')
@section('content-wrapper')

	<section>
		<div class="container">
			<div class="animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2 style="color: #000; ">Question</h2>
						</div>
					</div>
			<div id="" style="margin-top: -100px;">
				<div class="col-md-8 animate-box ">
					<!-- <div style="height: 155vh; width: 100%; background: #fff;" class="overlay"></div> -->
					<form action="/uploadquestion" method="post">
						{{csrf_field()}}
						<div class="row form-group animate-box" style="">
							<textarea disabled="disabled" style="box-shadow: 5px 10px 10px #888888; width: 95%; height: 90vh; font-size: 14px;padding: 20px; " value="">{{$result[0]->questions}}
								</textarea>
							
						</div>
						<!-- <p>RUN YOUT CODE HERE!!</p> -->
						<div class="row form-group  animate-box">
								<label for="subject">select language</label>
								<select class="col-md-2" onchange="getlang(this.value)" name="lang">
									<option value="">select an editor</option>
									<option value="1">C++14</option>
									<option value="2">python</option>
									<option value="3">JavaScript</option>
								</select>
								<div id="editor" style="box-shadow: 5px 10px 10px #888888; width: 95%; height: 50vh;">
								</div>
								<input type="hidden" id="code" name="codesoln">
						</div>
						<div class="form-group  animate-box">
                            <input style="float:right; margin-right: 50px;" type="submit" onclick="onsubmiting()" value="Run" class="btn btn-success">
                            <textarea style="box-shadow:5px 10px 10px #888888; width: 30%; height: 15vh; font-size: 14px;padding: 10px;" placeholder="INPUT" name="testcases"></textarea>

						</div>
                        @if(\Session::has('results'))
                            <div class="form-group animate-box alert alert-light" style="color:#000000; ">
                                <h4>your output:</h4>
                                {{{ \Session::get('results') }}}
                            </div>
                         @endif
					</form>		
				</div>
				<div class="col-md-4 col-lg-4">
						<div class="col-md-12">
							<div class="fh5co-event animate-box">	
								<div class="blog-text" style="display: inline-flex;">
									<h5 style="color: #000">Difficulty: </h5>
									@if($result[0]->difficulty ==0)
										<p style="color: green; margin-top: -5px;"> easy</p>
									@elseif($result[0]->difficulty ==1)
										<p style="color: red; margin-top: -5px;"> medium</p>
									@else
										<p style="color: red; margin-top: -5px;"> hard</p>
									@endif
								</div> 
							</div>
							<div class="fh5co-event animate-box" style="margin-top: -40px;">	
								<!-- <div class="blog-text"> -->
									<h3 style="color: #000">select topics</h3>
									<select style="width: 100%" onchange="getcat(this.value)">
										<option value="">select an option</option>
										@foreach($topics as $datacat)
											<option value="{{$datacat->cat_id}}">{{$datacat->category_name}}</option>
										@endforeach

									</select>
								<!-- </div>  -->
							</div>
							<div class="fh5co-event animate-box">
								<!-- <div class="blog-text"> -->
									<h3 style="color: #000">select Categories</h3>
									<select style="width: 100%" onchange="getsubcat(this.value)">
										<option value="">select an option</option>
										@foreach($subcat as $datasubcat)
											<option value="{{$datasubcat->id}}">{{$datasubcat->sub_category}}</option>
										@endforeach
									</select>
								<!-- </div>  -->
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.5/mode-c_cpp.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.5/mode-python.js"></script>

    <script type="text/javascript">
		function gotolink(id){
			console.log(id);
			window.location.href='/topics/loadquestion/'+id;
		}
		function getcat(value){
			console.log(value);
			window.location.href='/topics/cat-subcat/'+value;
		}
		function getsubcat(value){
			console.log(value);
			window.location.href='/topics/cat-subcat/'+value;
		}
	var textarea = $('#code');
	window.editor = ace.edit("editor");
	editor.setTheme("ace/theme/monokai");
	
	function onsubmiting(){
		console.log(textarea.val());

	}
	 function getlang(value){
	 	if(value==""){
		      editor.getSession().setMode("ace/mode/text");

		      editor.focus();
		      
		      
		      editor.setOptions({
		        fontSize: "9pt",
		        showLineNumbers: false,
		        showGutter: false,
		        vScrollBarAlwaysVisible:true,
		        enableBasicAutocompletion: false, enableLiveAutocompletion: false
		      });
//		      editor.setValue(``);
		      editor.setShowPrintMargin(false);
		      editor.setBehavioursEnabled(false);
	 	}
	 	if(value=='1'){
		      editor.getSession().setMode("ace/mode/c_cpp");

		      editor.focus();
		      
		      
		      editor.setOptions({
		        fontSize: "9pt",
		        showLineNumbers: false,
		        showGutter: false,
		        vScrollBarAlwaysVisible:true,
		        enableBasicAutocompletion: false, enableLiveAutocompletion: false
		      });
		      editor.setValue(`
  	#include <iostream>

  	using namespace std;

  	int main()
  	{
  		return 0;
  	}
		      	`);
		      editor.setShowPrintMargin(false);
		      editor.setBehavioursEnabled(false);

	 	}
	 	else if(value=='2'){
		      editor.getSession().setMode("ace/mode/python");

		      editor.focus();
		      
		      
		      editor.setOptions({
		        fontSize: "9pt",
		        showLineNumbers: false,
		        showGutter: false,
		        vScrollBarAlwaysVisible:true,
		        enableBasicAutocompletion: false, enableLiveAutocompletion: false
		      });
		      editor.setValue(`
    import numpy as nm

    addnumber(a,b)
        return a+b

	x= 10
	y= 5

	print(addnumber(x,y))`);
		      editor.setShowPrintMargin(false);
		      editor.setBehavioursEnabled(false);
	 	}
	 	else if(value=='3'){
	 		editor.getSession().setMode("ace/mode/javascript");

		      editor.focus();
		      
		      
		      editor.setOptions({
		        fontSize: "9pt",
		        showLineNumbers: false,
		        showGutter: false,
		        vScrollBarAlwaysVisible:true,
		        enableBasicAutocompletion: false, enableLiveAutocompletion: false
		      });
		      editor.setValue(`
     function add(x,y){
     	var result= x+y;
     	return result;
     }

     console.log(add(1,2));
		      	`);
		      editor.setShowPrintMargin(false);
		      editor.setBehavioursEnabled(false);
	 	}
	 }
	editor.getSession().on('change',function(){
		textarea.val(editor.getSession().getValue());
	});
	</script>
@endsection
