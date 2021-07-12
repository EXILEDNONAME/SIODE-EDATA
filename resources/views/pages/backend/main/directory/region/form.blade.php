<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Province </label>
    <div class="col-lg-9">
      {!! Form::select('id_province', provinces(), (isset($data->id_province) ? $data->id_province : NULL), ['placeholder' => '- Select Province -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_province') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Type </label>
    <div class="col-lg-9">
      {!! Form::text('type', (isset($data->type) ? $data->type : ''), ['class' => $errors->has('type') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('type') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Postal Code </label>
    <div class="col-lg-9">
      {!! Form::text('postal_code', (isset($data->postal_code) ? $data->postal_code : ''), ['class' => $errors->has('postal_code') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('postal_code') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description </label>
    <div class="col-lg-9">
      {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Active </label>
    <div class="col-lg-9">
      {{ Form::select('active', ['1' => 'Yes', '0' => 'No'], (isset($data->active) ? $data->active : '1'), ['class' => $errors->has('active') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
      @error('active') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
