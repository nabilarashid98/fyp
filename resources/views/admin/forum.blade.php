@extends('layout.adminapp')

@section('content')
<br>
<br>
<div class="container">
    <div class="row">       
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success"><span class="fa fa-check"></span><em> {!! session('flash_message') !!}</em></div>
                            @endif
                            @if(Session::has('flash_message_delete'))
                      <div class="alert alert-danger"><span class="fa fa-warning"></span><em> {!! session('flash_message_delete') !!}</em></div>
                      @endif
                        </div>
                        <div class="col-sm-2"></div>
                      
                </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($finalarray as $data)
        <tbody>       
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data['username']}}</td>
                <td>{{$data['title']}}</td>
                <td>{{$data['body']}}</td>
                <td><a href="{{ action('AdminController@detailforum', $data['id']) }}"><span class="badge badge-primary">comment</span></a> | <a onclick="return confirm('Are you sure you want to delete?')" href="{{ action('AdminController@destroyforum', $data['id']) }}"><span class="badge badge-danger">delete</span></a> </td>
            </tr>   
        </tbody>
        @endforeach 
    </table>
        </div>
    </div>
</div>
@endsection