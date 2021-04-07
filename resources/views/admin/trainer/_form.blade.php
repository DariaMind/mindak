
<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Выбрать
      </a>
    </span>
    <input id="thumbnail3" class="form-control" type="text" name="img" value="@isset($trainer){{$trainer->img}} @endisset">
  </div>
  <div id="holder3" style="margin-top:15px;max-height:100px;"></div>

  @isset($trainer)
  <img src="{{$trainer->img}}" alt="" style="width:60px; hight: 60px;">
@endisset


<div class="form-group">
    {!! Form::label('name', 'ФИО') !!}
    {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '' )]) !!}
        @error('name') 
                   <div class="invalid-feedback">{{$message}}</div>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Тренер slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control' . ($errors->has('slug') ? ' is-invalid' : '' )]) !!}
        @error('slug') 
           <div class="invalid-feedback">{{$message}}</div>
        @enderror
</div>

<div class="form-group">
     {!! Form::label('description', 'Описание') !!} 
     {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<button class="btn btn-primary">Сохранить</button>
