<!-- location/index.blade.php -->

@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class=" col-md-8">
			<h3 class="page-title">
				Manage Families on (Leader Teritory)
				<small>Families Data Table</small>
			</h3>

			<div class="portlet box red-flamingo">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-user"></i>
						Families Data
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
						<a href="#portlet-config" data-toggle="modal" class="config">	</a>
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>
					</div>
				</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table">
								<thead>
								<tr>
									<th>Families No.</th>
									<th>Issued Date</th>
									<th>Father Name</th>
									<th>Leader</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 1
									</td>
									<td>
										 Table cell
									</td>
									<td></td>
									<td></td>
									<td>
										 <a href="member/create">
										 	<i class="fa fa-plus"> </i>
										 </a>
										 <a href="member/edit">
										 	<i class="fa fa-pencil"></i>
										 </a>
										 <a href="member/delete">
										 	<i class="fa fa-trash"></i>
										 </a>
									</td>
								</tr>
								<tr>
									<td>
										 2
									</td>
									<td>
										 Table cell
									</td>
									<td></td>
									<td></td>
									<td>
										 <a href="member/create">
										 	<i class="fa fa-plus"> </i>
										 </a>
										 <a href="member/edit">
										 	<i class="fa fa-pencil"></i>
										 </a>
										 <a href="member/delete">
										 	<i class="fa fa-trash"></i>
										 </a>
									</td>
								</tr>
								<tr>
									<td>
										 3
									</td>
									<td>
										 Table cell
									</td>
									<td></td>
									<td></td>
									<td>
										 <a href="member/create">
										 	<i class="fa fa-plus"> </i>
										 </a>
										 <a href="member/edit">
										 	<i class="fa fa-pencil"></i>
										 </a>
										 <a href="member/delete">
										 	<i class="fa fa-trash"></i>
										 </a>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
				<h3>User Guidelines</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			</div>
		</div>
	</div>


@endsection