@extends('admin.layouts.index')
<style>
    .btn-admin{
        height: 100px;
    }
</style>
@section('content')

    <button btn style="height: 100px; width:120px; border: 3px, solid,green"><a href="/admin/holl" style="color:black; ">ЗАЛЫ</a></button>
    <button btn style="height: 100px; width:120px; border: 3px, solid,rgb(49, 84, 240)"><a href="/admin/trainer"style="color:black; ">ТРЕНЕРЫ</a></button>
@endsection