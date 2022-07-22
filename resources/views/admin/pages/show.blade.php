@extends('admin.layout.app')
@section('title','Show')
@section('content')
<div class="container py-5">
    @if(session('status'))
        <div class="alert-danger alert">{{session('status')}}</div>
    @endif
   
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <table class="table text-light table-bordered">
                @foreach($getData as $key => $single_data)
                <tr>
                    <td>{{$single_data->column_1}}</td>
                    <td>{{$single_data->column_2}}</td>
                    <td>{{$single_data->column_3}}</td>
                    <td>{{$single_data->column_4}}</td>
                    <td>{{$single_data->column_5}}</td>
                    <td>{{$single_data->column_6}}</td>
                    <td>{{$single_data->column_7}}</td>
                    <td>{{$single_data->column_8}}</td>
                    <td>{{$single_data->column_9}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
   
</div>

    
  
    
@endsection