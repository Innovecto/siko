<!-- /member/form.blade.php -->

@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="col-md-5">
				<h3>
					Add Religion
					<small>Form</small>
				</h3>

				<hr />

				{!! Form::open(['url' => 'religions']) !!}

				@include('religion.form')

				{!! Form::close() !!}

				@if ($errors->any())

					<div class="panel panel-danger">
						<div class="panel-heading">
							<ul>
								@foreach ($errors->all() as $error)
									{{ $error }}
								@endforeach
							</ul>
						</div>
					</div>

				@endif


			</div>
		</div>
	</div>
@endsection