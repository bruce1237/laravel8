@extends('userLayout')

@section('container')
This is User: {{$name}}
{{$users['name']}}<br /><br />
{{$users['email']}}<br /><br />
{{$users['gender']}}

@stop