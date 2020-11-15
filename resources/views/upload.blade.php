@extends('layouts.master')

@section('title', 'File Upload')

@section('content')

    <form action='' method='post' enctype="multipart/form-data">
    @csrf
        <div class="input-group">
            <div class="custom-file">
                <input type="file" name = 'fileUpload' class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
            </div>
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" id="inputGroupFileAddon04">Upload</button>
            </div>
        </div>
    </form>


@endsection
