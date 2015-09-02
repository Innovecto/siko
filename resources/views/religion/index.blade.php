<!-- member/index.blade.php -->

@extends('layouts.master')

@section('page-title')
	<h1>Religions<small> Data</small></h1>
@endsection

@section('content')

	<!-- BEGIN PAGE BREADCRUMB -->
	{!! Breadcrumbs::render('religion-data') !!}
	<!-- END PAGE BREADCRUMB -->
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="portlet box red-flamingo">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-user"></i>
				Religion Data
			</div>
			<div class="tools">
				{!! Html::linkRoute('religion::create', 'Add Religion') !!}
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
									<a href="religion/{{ $value->id }}">{!! $value->name !!}</a>
								</td>
								<td>
									 <a href="religion/{{ $value->id }}">
									 	<i class="fa fa-eye"> </i>
									 </a>
									 <a href="religion/{{ $value->id }}/edit">
									 	<i class="fa fa-pencil"></i>
									 </a>
									 {!! Form::open(['method' => 'DELETE', 'action' => ['ReligionController@destroy', $value->id]]) !!}
										<button type="submit" value="{{ $value->id }}" class="btn btn-danger btn-mini">Delete</button>
									 {!! Form::close() !!}
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

@endsection