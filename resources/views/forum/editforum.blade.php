@extends('layout.app')
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
                        </div>
                        <div class="col-sm-2"></div>
                      
                </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Forum</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('updateforum', $detailforum->id) }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Forum Title: </label>
                            <input type="text" name="title" name="title" value="{{$detailforum->title}}" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Forum Body: </label>
                            <textarea name="body" rows="10" cols="30" name="body" class="form-control" required>{{$detailforum->body}}</textarea>
                        </div>
                      <div>
                        <form action="/upload" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <input type="file" accept="image/*" name="file">
                        <button type="submit">Submit</button>
                         </form>
                         </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                    @foreach($forum as $data)
        <tbody>    
            @if($data->userid == $userinfo->id)   
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->title}}</td>
                <td><a href="{{ action('ForumController@edit', $data->id) }}"><span class="badge badge-primary">view</span></a> | <a onclick="return confirm('Are you sure you want to delete?')" href="{{ action('ForumController@destroy', $data->id) }}"><span class="badge badge-danger">delete</span></a> </td>
            </tr>  
            @else
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->title}}</td>
                <td><a href="{{ action('ForumController@edit', $data->id) }}"><span class="badge badge-primary">view</span></a> </td>
            </tr>  
            @endif 
        </tbody>
        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection