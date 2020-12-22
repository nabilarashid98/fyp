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
                <th>TotalYes</th>
                <th>TotalMaybe</th>
                <th>TotalNo</th>
                <th>Result</th>
             
            </tr>
        </thead>
        @foreach($screenings as $data)
        <tbody>       
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->totalyes}}</td>
                <td>{{$data->totalmaybe}}</td>
                <td>{{$data->totalno}}</td>
                <td>{{$data->result}}</td>
            
            </tr>   
        </tbody>
        @endforeach 
    </table>
        </div>
    </div>
</div>
@endsection