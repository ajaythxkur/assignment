@extends('admin.layout.app')
@section('title','Show')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <table class="table text-light table-bordered">
                @foreach($incoming as $key => $single_data)
                    <tr>
                        @foreach ($single_data as $key => $value )
                            <td>{{$value}}</td>
                        @endforeach
                    </tr> 
                @endforeach
            </table>
        </div>
    </div>
   
</div>
