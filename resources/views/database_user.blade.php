@extends('userLayout')

@section('container')
@foreach ($data as $rows)
<h3>
    {{$rows->name}}-{{$rows->email}}

</h3>
@endforeach

@stop
