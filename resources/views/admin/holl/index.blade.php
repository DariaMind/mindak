@extends('admin.layouts.index')

@section('content')
    <h4 class="admin-h">З А Л Ы</h4>
    <a href="/admin/holl/create" class="btn btn-success mb-2">Добавить зал</a>
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Номер зала</th>
            <th>Название</th>
            <th>№ телефона</th>
            <th>E-mail</th>
            <th>Адрес</th>
            <th>Расписание</th>
            <th>Карта</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($holls as $item)
          
       
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->holl_number}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td> 
            <td>{!!$item->address!!}</td>
            <td><img src="{{asset($item->timetable_img)}}" alt="table" style="width:60px; hight: 60px;"></td>
            <td><img src="{{asset($item->map_img)}}" alt="map" style="width:60px; hight: 60px;"></td> 
            <td><a href="/admin/holl/{{$item->id}}/edit" class="btn btn-info">Изменить</a>
            {!! Form::open(['url' => '/admin/holl/'.$item->id, 'method' => 'DELETE']) !!}
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
