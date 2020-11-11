@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Contact US</h2>
            <h2>Photo of me:</h2>
            <div class ="fakeimg">
                <img src="{{asset('/images/lake.jpg')}}" height="200" width="400" style="float: inline-end;">
                <p>some text about me in culpa qui officia deserunt mollit anim...</p>
            </div>
        </div>
    </div>
</div>

@stop