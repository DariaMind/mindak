@extends('admin.layouts.index')

@section('content')

<h4 class="admin-h">Изменить данные</h4>

{!! Form::model($trainer, ['url' => '/admin/trainer/'.$trainer->id, 'files'=>true, 'method' => 'put']) !!}

@include('admin.trainer._form')

{!! Form::close() !!}
 

@endsection


@section('js')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
    CKEDITOR.replace('description', options);
    $('#lfm3').filemanager('image');
</script>
@endsection