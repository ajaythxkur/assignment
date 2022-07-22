@extends('admin.layout.app')
@section('title','Assignment')

@section('content')
    <div class="container">
        <div class="row d-flex align-items-center" style="height: 100vh">
            <div class="col-md-12 d-flex justify-content-center">
                <form action="{{ route('form.submit') }}" method="post" enctype="multipart/form-data" class="border rounded border-light p-4 w-50 text-center">
                    @csrf 
                    <input type="file" name="file_to_upload" class="form-control" />
                    @if($errors->has('file_to_upload'))
                        <span class="text-danger">{{ $errors->first('file_to_upload') }}</span><br>
                    @endif
                    <input type="Submit" value="Upload" class="btn btn-outline-light mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection