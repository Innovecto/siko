<!-- /member/form.blade.php -->

@extends('layouts.master')

@section('page-title')
	<h1>
		Add Religion
		<small>Form</small>
	</h1>
@endsection

@section('content')

	{!! Breadcrumbs::render('religion-create') !!}

	{!! Form::open(['url' => 'religions']) !!}

	@include('religion.form')

	{!! Form::close() !!}

	@include('errors.errorlist')

@endsection