@extends('dashboard.dashtemplate')

@section('wrapper')
	<div class="wrapper" style="min-height: 70vh;">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <div class="span9">
                                        <div class="module row-fluid">
			                                <div class="module-head row-fluid">
			                                    <h3>
			                                        Your Dashbord</h3>
			                                </div>
			                                <div class="module-body table row-fluid">
			                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
			                                        width="100%">
			                                        <thead>
			                                            <tr>
			                                                <th>
			                                                    Topic
			                                                </th>
			                                                <th>
			                                                    Sub topic
			                                                </th>
			                                                <th>
			                                                    Question
			                                                </th>
			                                                <th>
			                                                    Your solution
			                                                </th>
			                                                <th>
			                                                	Difficulty
			                                                </th>
			                                                <th>
			                                                	Action
			                                                </th>
			                                            </tr>
			                                        </thead>
			                                        <tbody>
			                                        	<input type="hidden" value="{{$ques}}">
			                                        	@foreach($ques as $data)

			                                            <tr class="odd gradeX">
			                                                <td>
			                                                    {{$data->category_name}}
			                                                </td>
			                                                <td>
			                                                    {{$data->sub_category}}
			                                                </td>
			                                                <td class="center">
			                                                    {{substr($data->questions,0,200)}}
			                                                </td>
			                                                <td class="center">
			                                                    @if($data->user_solution =="")
			                                                    	<span>not yet solved</span>
			                                                    @else
			                                                    	{{$data->user_solution}}
			                                                    @endif
			                                                </td>
			                                                <td>
			                                                	@if($data->difficulty ==0)
			                                                    	<span ><b><p style="color: green;">easy</p></b></span>
			                                                    @elseif($data->difficulty ==1)
			                                                    	<span ><b><p style="color: pink;">medium</p></b></span>
			                                                    @else
			                                                    	<span><b><p  style="color: red;">hard</p></b></span>
			                                                    @endif
			                                                </td>
			                                                <td><span><button class="btn btn-primary" type="button" onclick="getmore({{$data->quesid}})">view more</button></span></td>
			                                            </tr>
			                                            @endforeach
			                                            
			                                        </tbody>
			                                    </table>
			                                </div>
			                            </div>
                                    </div>
                                    <div class="widget widget-usage span3">
                                    	<p><strong>Programming Proficiency</strong></p>
	                                    <ul class="widget widget-usage unstyled span12">
	                                        <li>
	                                            <p>
	                                                <strong>Data Structures</strong> <span class="pull-right small muted">78%</span>
	                                            </p>
	                                            <div class="progress tight">
	                                                <div class="bar" style="width: 78%;">
	                                                </div>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <p>
	                                                <strong>Algorithms</strong> <span class="pull-right small muted">56%</span>
	                                            </p>
	                                            <div class="progress tight">
	                                                <div class="bar bar-success" style="width: 56%;">
	                                                </div>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <p>
	                                                <strong>Mathematics</strong> <span class="pull-right small muted">44%</span>
	                                            </p>
	                                            <div class="progress tight">
	                                                <div class="bar bar-warning" style="width: 44%;">
	                                                </div>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <p>
	                                                <strong>Others</strong> <span class="pull-right small muted">67%</span>
	                                            </p>
	                                            <div class="progress tight">
	                                                <div class="bar bar-danger" style="width: 67%;">
	                                                </div>
	                                            </div>
	                                        </li>
	                                    </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <!--/.module-->
                           <!--  <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                             -->
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
@endsection