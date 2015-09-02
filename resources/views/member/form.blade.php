<!-- /member/form.blade.php -->

@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<h3>
				Create Member
				<small>Form</small>
			</h3>

			{!! Form::open() !!}

			<div class="form-group">
				{!! Form::text('id_number', "", array('placeholder' => 'No. KTP', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('first_name', "", array('placeholder' => 'First Name', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('last_name', "", array('placeholder' => 'Last Name', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('birthplace', "", array('placeholder' => 'Birth Place', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('birthdate', "", array('placeholder' => 'Birth Date', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('gender', "", array('placeholder' => 'Gender', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				<select name="religion_id" class="form-control input-medium">
					<option value="1">Islam</option>
					<option value="2">Christian</option>
					<option value="3">Catholic</option>
					<option value="4">Hindi</option>
					<option value="5">Budhist</option>
				</select>
			</div>

			<div class="form-group">
				{!! Form::text('province', "", array('placeholder' => 'Province', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('city', "", array('placeholder' => 'City', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('subdistrict', "", array('placeholder' => 'Sub District', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('village', "", array('placeholder' => 'Village', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('cluster', "", array('placeholder' => 'Cluster', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('subcluster', "", array('placeholder' => 'Sub Cluster', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::text('email', "", array('placeholder' => 'Email', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				<label>Password: </label>
				{!! Form::password('password', "", array('placeholder' => 'Password', 'class' => 'form-control' )) !!}
			</div>

			<div class="form-group">
				{!! Form::button("Create Member", array('type' => 'submit', 'class' => 'btn blue' )) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>
@endsection