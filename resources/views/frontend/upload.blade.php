@extends('layouts.admin')
@section('title')
{{ __('contact') }}
@endsection

@section('content')

<div class="container">
    <form  action="{{Route('uploadImage')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
            
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>
@endsection