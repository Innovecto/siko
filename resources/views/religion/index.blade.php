<!-- member/index.blade.php -->

@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<h3 class="page-title">
				Manage Religion
				<small>Religion Data Table</small>
			</h3>

			<hr />

				<div class="portlet box red-flamingo">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-user"></i>
							Religion Data
						</div>
						<div class="tools">
							<a href="religions/create">
								<i class="fa fa-plus"> </i>
							</a>
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
									<th>
										 #
									</th>
									<th>
										 Religion
									</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
									@foreach ($religions as $value)
										<tr>
											<td>
												 {{ $value->id }}
											</td>
											<td>
												<a href="religions/{{ $value->id }}">{!! $value->name !!}</a>
											</td>
											<td>
												 <a href="religions/{{ $value->id }}">
												 	<i class="fa fa-eye"> </i>
												 </a>
												 <a href="religions/{{ $value->id }}/edit">
												 	<i class="fa fa-pencil"></i>
												 </a>
												 <a href="religions/delete">
												 	<i class="fa fa-trash"></i>
												 </a>
											</td>
										</tr>
									@endforeach
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


@endsection