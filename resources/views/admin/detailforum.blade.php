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
                        </div>
                        <div class="col-sm-2"></div>
                      
                </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p><b>{{$forum->title}}</b></p>
                    <p>
                       {{$forum->body}} 
                    </p>    
                    
                    <hr />
                    
                    <h4>Display Comments</h4>
                 		@foreach($listcomment as $data)
                        <div class="row">
                            <div class="col-8">
                                <div class="display-comment">
                                    <p>{{$data->content}}</p>
                                </div>
                            </div>
                            <div class="col-2">
                            <button type="button" class="btn btn-danger" onclick="window.location='{{ action('AdminController@destroycomment', $data->id) }}'">Delete</button>
                            </div>
                        </div>
                        @endforeach
                    <hr />
                  
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('adminaddcomment') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="content" class="form-control" />
                            <input type="hidden" name="forumid" value="{{$forum->id}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection