<!-- /member/form.blade.php -->

@extends('layouts.master')

@section('page-title')
	<h1>
		Create Location
		<small>Form</small>
	</h1>
@endsection

@section('content')

	{!! Breadcrumbs::render('location-create') !!}

	{!! Form::open() !!}

		<div class="form-group">
			<label>Location Name: </label>
			{!! Form::text('name', "", array('placeholder' => 'Location Name', 'class' => 'form-control' )) !!}
		</div>

		<div class="form-group">
			<label>Zip Code: </label>
			{!! Form::text('zipcode', "", array('placeholder' => 'Zip Code', 'class' => 'form-control' )) !!}
		</div>

		<div class="form-group">
			<label>Parent: </label>
			{!! Form::text('parent', "", array('placeholder' => 'Parent', 'class' => 'form-control' )) !!}
		</div>

		<div class="form-group">
			<select name="level" class="form-control input-medium">
				<option value="1">Province</option>
				<option value="2">City</option>
				<option value="3">Sub District</option>
				<option value="4">Village</option>
				<option value="5">Cluster</option>
				<option value="6">Sub CLuster</option>
			</select>
		</div>

		<div class="form-group">
			{!! Form::hidden('leader', "", array('placeholder' => 'leader', 'class' => 'form-control' )) !!}
		</div>

		<div class="form-group">
			{!! Form::button("Create Member", array('type' => 'submit', 'class' => 'btn blue' )) !!}
		</div>

	{!! Form::close() !!}

@endsection