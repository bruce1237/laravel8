@extends('userLayout')

@section('container')

<form action = "{{url('/login')}}" method="post">
@csrf
<input name ='email' /><br />
@error('email')
{{$message}}<br />
@enderror
<input name = 'password'/><br />
@error('password')
{{$message}}<br />
@enderror
<button>Subbmit</button>

</form>

@stop