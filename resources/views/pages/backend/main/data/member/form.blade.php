<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Job </label>
    <div class="col-lg-9">
      {!! Form::select('id_job', jobs(), (isset($data->id_job) ? $data->id_job : NULL), ['placeholder' => '- Select Job -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_job') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Religion </label>
    <div class="col-lg-9">
      {!! Form::select('id_religion', religions(), (isset($data->id_religion) ? $data->id_religion : NULL), ['placeholder' => '- Select Religion -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_religion') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Region </label>
    <div class="col-lg-9">
      {!! Form::select('id_region', regions(), (isset($data->id_region) ? $data->id_region : NULL), ['placeholder' => '- Select Region -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_region') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> NIK </label>
    <div class="col-lg-9">
      {!! Form::number('nik', (isset($data->nik) ? $data->nik : ''), ['class' => $errors->has('nik') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('nik') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
    <label class="col-lg-3 col-form-label"> Gender </label>
    <div class="col-lg-9">
      {{ Form::select('gender', ['1' => 'Male', '0' => 'Female'], (isset($data->gender) ? $data->gender : '1'), ['class' => $errors->has('gender') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
      @error('gender') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Address </label>
    <div class="col-lg-9">
      {!! Form::textarea('address', (isset($data->address) ? $data->address : ''), ['class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Education </label>
    <div class="col-lg-9">
      {!! Form::text('education', (isset($data->education) ? $data->education : ''), ['class' => $errors->has('education') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('education') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
