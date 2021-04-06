@extends('admin.layouts.index')

@section('content')
    <h4 class="admin-h">З А Л Ы</h4>
    <a href="/admin/gallery/create" class="btn btn-primary mb-2">Добавить зал</a>
<table class="table" id="dataTable3">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Номер зала</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($galleries as $item)
          
       
        <tr>
            <td>{{$loop->iteration}}</td>
                     
            <td><img src="{{asset($item->pic)}}" alt="table" style="width:60px; hight: 60px;"></td>
            
            {{-- <td><a href="/admin/gallery/{{$item->id}}/edit" class="btn btn-warning">Изменить</a>
            {!! Form::open(['url' => '/admin/gallery/'.$item->id, 'method' => 'DELETE']) !!}
            <button class="btn btn-danger">DELETE</button>
            {!! Form::close() !!} --}}
            </td>
        </tr>
         @endforeach
    </tbody>
</table>

@endsection



@section('js')
<script>
$(document).ready( function () {
    $('#dataTable3').DataTable();
} );
</script>
@endsection