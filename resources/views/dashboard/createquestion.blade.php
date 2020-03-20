@extends('dashboard.dashtemplate')

@section('wrapper')

	<div class="wrapper" style="min-height: 70vh;">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Create question</h3>
							</div>
							<div class="module-body">

									<form class="form-horizontal row-fluid" action="/topics/createquestion" method="post">

										<div class="control-group">
											<label class="control-label" for="basicinput">Topic</label>
											<div class="controls">
												<select name="topics" onchange="showsubcat(this.value)" tabindex="1" data-placeholder="Select here.." class="span8" required="required">
													<option value="">select an option</option>
													@foreach($topics as $data)
													<option value="{{$data->cat_id}}">{{$data->category_name}}</option>
													@endforeach
													<option value="add">Add a sub-topic</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">select difficulty level</label>
											<div class="controls">
												<select name="difficulty" id="" tabindex="1" data-placeholder="Select here.." class="span8" required="required">
													<option value="">Select an option</option>
													<option value="1">Easy</option>
													<option value="2">Medium</option>
													<option value="3">Hard</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Sub topic</label>
											<div class="controls">
												<select name="subtopics" id="sub-topic" tabindex="1" data-placeholder="Select here.." class="span8" required="required">
													
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Question</label>
											<div class="controls">
												<textarea name="questions" class="span8" rows="18" required="required"></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<script type="text/javascript">

	function showsubcat(value){
		// var id= {{}}
		let trHTML="";
		console.log(value);
		if(value !== ""){
			if(value =="add"){

			}
			else if(value=="none"){

			}
			else{
				$.ajax({
			        type: "GET",
			        url: `/api/getsubcat/${value}`,
			        dataType: "json",
			        success: function (result) {
			            let img = '';
			            console.log(result);
			            trHTML="";
			            trHTML = '<option value="">Select or Add a sub topic</option>';
		                result.forEach( function (data) {
		                	if(Object.keys(data).length >0)
		                		trHTML+=`<option value="${data.id}">${data.sub_category}</option>`;
		                   // console.log(data.sub_category);
		                });
		                trHTML+='<option value="add">Add a sub-topic</option>';
		                trHTML+='<option value="none">None</option>';

		                $('#sub-topic').html(trHTML);
		                // $('#sub-topic').html(trHTML);

			        },
			        error: function (xhr, status, error) {
			            alert("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
			        }
			    });
			}
		}
		else{
			trHTML="";
			$('#sub-topic').html(trHTML);
		}
	}
</script>


	<div id="addCategory" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Edit Faq Sub Category</h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                     <p class="statusMsg"></p>
                     <form role="form" >
                     
                    <div id="add"></div>
                    <div id="edit"></div>
                        
                     </form>
                 </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary submitBtn" onclick="editCategoryForm()">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
    <div id="addsubCat" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">Edit Faq Sub Category</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                         <p class="statusMsg"></p>
                         <form role="form" >
                         
                        <div id="add"></div>
                        <div id="edit"></div>
                            
                         </form>
                     </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary submitBtn" onclick="editCategoryForm()">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
@endsection