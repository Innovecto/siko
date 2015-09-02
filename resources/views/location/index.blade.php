<!-- location/index.blade.php -->

@extends('layouts.master')

@section('page-title')
	<h1>Location <small>Data</small></h1>
@endsection

@section('content')

	{!! Breadcrumbs::render('location-data') !!}

	<div class="portlet box red-flamingo">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-user"></i>
				Location Data
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
							<th>
								 #
							</th>
							<th>Location Name</th>
							<th>Zip Code</th>
							<th>Parent</th>
							<th>Level</th>
							<th>Leader</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
							@foreach ($locations as $value)

								<tr>
									<td>ID: {{ $value->id }}</td>
									<td>{{ $value->name }}</td>
									<td>{{ $value->zipcode }}</td>
									<td>{{ $value->parent }}</td>
									<td>{{ $value->level }}</td>
									<td>{{ $value->leader }}</td>
									<td>
										 <a href="location/create">
										 	<i class="fa fa-plus"> </i>
										 </a>
										 <a href="location/edit">
										 	<i class="fa fa-pencil"></i>
										 </a>
										 <a href="location/delete">
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


@endsection