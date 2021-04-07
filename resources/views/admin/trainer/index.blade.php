@extends('admin.layouts.index')

@section('content')
    <h4 class="admin-h">Транерский состав</h4>
   {{-- admin/team/create --}} 
    <a href="/admin/trainer/create" class="btn btn-success mb-2">Добавить тренера</a>
<table class="table" id="dataTable">
    <thead> 
        <tr> 
            <th>№ п/п</th>
            <th>Фото</th>
            <th>ФИО</th>
            <th>Описание</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $item)
               
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{asset($item->img)}}" alt="table" style="width:60px; hight: 60px;"></td>
            <td>{{$item->name}}</td>
            <td>{!!$item->description!!}</td>
            
            <td><a href="/admin/trainer/{{$item->id}}/edit" class="btn btn-info">Изменить</a>

            {!! Form::open(['url' => '/admin/trainer/'.$item->id, 'method' => 'DELETE']) !!}
            <button class="btn btn-danger">DELETE</button>
            {!! Form::close() !!}
            </td>
        </tr>
         @endforeach
    </tbody>
</table>

@endsection



@section('js')
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>
@endsection
