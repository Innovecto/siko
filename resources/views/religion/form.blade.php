				<div class="form-group">
					
					{!! Form::label('Religion Name') !!}
					{!! Form::text('name', "", array('placeholder' => 'Religion', 'class' => 'form-control' )) !!}
					
				</div>


				<div class="form-group">
					{!! Form::button("Add Religion", array('type' => 'submit', 'class' => 'btn blue' )) !!}
				</div>

