@extends('dashboard.dashtemplate')

@section('wrapper')
	<div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <div class="span9">
                                        <div class="module row-fluid">
			                                <div class="module-head row-fluid">
			                                    <h3>
			                                        DataTables</h3>
			                                </div>
			                                <div class="module-body table row-fluid">
			                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
			                                        width="100%">
			                                        <thead>
			                                            <tr>
			                                                <th>
			                                                    Rendering engine
			                                                </th>
			                                                <th>
			                                                    Browser
			                                                </th>
			                                                <th>
			                                                    Platform(s)
			                                                </th>
			                                                <th>
			                                                    Engine version
			                                                </th>
			                                                <th>
			                                                    CSS grade
			                                                </th>
			                                            </tr>
			                                        </thead>
			                                        <tbody>
			                                            <tr class="odd gradeX">
			                                                <td>
			                                                    Trident
			                                                </td>
			                                                <td>
			                                                    Internet Explorer 4.0
			                                                </td>
			                                                <td>
			                                                    Win 95+
			                                                </td>
			                                                <td class="center">
			                                                    4
			                                                </td>
			                                                <td class="center">
			                                                    X
			                                                </td>
			                                            </tr>
			                                            <tr class="even gradeC">
			                                                <td>
			                                                    Trident
			                                                </td>
			                                                <td>
			                                                    Internet Explorer 5.0
			                                                </td>
			                                                <td>
			                                                    Win 95+
			                                                </td>
			                                                <td class="center">
			                                                    5
			                                                </td>
			                                                <td class="center">
			                                                    C
			                                                </td>
			                                            </tr>
			                                            
			                                        </tbody>
			                                        <tfoot>
			                                            <tr>
			                                                <th>
			                                                    Rendering engine
			                                                </th>
			                                                <th>
			                                                    Browser
			                                                </th>
			                                                <th>
			                                                    Platform(s)
			                                                </th>
			                                                <th>
			                                                    Engine version
			                                                </th>
			                                                <th>
			                                                    CSS grade
			                                                </th>
			                                            </tr>
			                                        </tfoot>
			                                    </table>
			                                </div>
			                            </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span3">
                                        <li>
                                            <p>
                                                <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                            <!--/.module-->
                            <div class="module hide">
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