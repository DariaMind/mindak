<div class="form-group">
    {!! Form::label('holl_number', 'Номер зала') !!}
    {!! Form::text('holl_number', null, ['class'=>'form-control' ]) !!}
    </div>
<div class="form-group">
{!! Form::label('name', 'Название') !!}
{!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '' )]) !!}
@error('name') 
           <div class="invalid-feedback">{{$message}}</div>
@enderror
</div>

    <div class="form-group">
        {!! Form::label('slug', 'Holl slug') !!}
        {!! Form::text('slug', null, ['class'=>'form-control' . ($errors->has('slug') ? ' is-invalid' : '' )]) !!}
        @error('slug') 
           <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

<div class="form-group">
    {!! Form::label('phone', '№ телефона') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('address', 'Адрес') !!} 
     {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
 

<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="timetable_img" value="@isset($holl){{$holl->timetable_img}} @endisset">
  </div>
  <div id="holder" style="margin-top:15px;max-height:100px;"></div>

  @isset($holl)
  <img src="{{$holl->timetable_img}}" alt="" style="width:60px; hight: 60px;">
@endisset

<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail2" class="form-control" type="text" name="map_img" value="@isset($holl){{$holl->map_img}} @endisset">
  </div>
  <div id="holder2" style="margin-top:15px;max-height:100px;"></div>

  @isset($holl)
      <img src="{{$holl->map_img}}" alt="" style="width:60px; hight: 60px;">
  @endisset

  <button class="btn btn-primary">Сохранить</button>