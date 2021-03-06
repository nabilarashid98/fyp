@extends('layout.adminapp')

@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
            </tr>
        </thead>
        @foreach($feedbacks as $data)
        <tbody>       
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->description}}</td>
            </tr>   
        </tbody>
        @endforeach 
    </table>
        </div>
    </div>
</div>
@endsection
