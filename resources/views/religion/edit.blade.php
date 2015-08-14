<!-- /member/form.blade.php -->

@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="col-md-5">
				<h3>
					Update Religion
					<small>Form</small>
				</h3>

				<hr />

				{!! Form::model($religions, ['method' => 'PATCH', 'action' => ['ReligionController@update', $religions->id]]) !!}

				<div class="form-group">
					
					{!! Form::label('Religion Name') !!}
					{!! Form::text('name', null, array('placeholder' => 'Religion', 'class' => 'form-control' )) !!}
					
				</div>


				<div class="form-group">
					{!! Form::button("Update Religion", array('type' => 'submit', 'class' => 'btn blue' )) !!}
				</div>

				{!! Form::close() !!}

				@include('errors.errorlist')

			</div>
		</div>
	</div>
@endsection