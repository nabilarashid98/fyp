@extends('layout.app')
@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p><b>ABC</b></p>
                    <p>
                        as
                    </p>    
                    <button type="button" class="btn btn-warning" onclick="window.location=''">Edit</button>
                    <hr />
                    
                    <h4>Display Comments</h4>
                 
                        <div class="row">
                            <div class="col-8">
                                <div class="display-comment">
                                    <p>a</p>
                                </div>
                            </div>
                            <div class="col-2">
                            <button type="button" class="btn btn-danger" onclick="window.location=''">Delete</button>
                            </div>
                        </div>
                    <hr />
                  
                    <h4>Add comment</h4>
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="content" class="form-control" />
                            <input type="hidden" name="forumid" value="">
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