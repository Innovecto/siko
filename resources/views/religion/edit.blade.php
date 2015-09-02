<!-- /member/form.blade.php -->

@extends('layouts.master')

@section('page-title')
	<h1>Update Religion <small>Data</small></h1>
@endsection

@section('content')
	{!! Breadcrumbs::render('religion-update') !!}

	{!! Form::model($religions, ['method' => 'PATCH', 'route' => ['religion::update', $religions->id]]) !!}

		<div class="form-group">
			{!! Form::label('Religion Name') !!}
			{!! Form::text('name', null, array('placeholder' => 'Religion', 'class' => 'form-control' )) !!}
		</div>

		<div class="form-group">
			{!! Form::button("Update Religion", array('type' => 'submit', 'class' => 'btn blue' )) !!}
		</div>

	{!! Form::close() !!}

	@include('errors.errorlist')

@endsection