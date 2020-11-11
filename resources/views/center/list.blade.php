@extends('layout.app')

@section('content')
<br>
<br>
<div class="container">
    <form method="POST" action="{{ route('searchcenter') }}">
                    {{ csrf_field() }} 
                <div class="row">   
                
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                        <div class="form-group">
                            <select class="form-control" name="state">
                            <option value="all">all</option>
                            <option value="Johor">Johor</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Pulau Pinang">Pulau Pinang</option>
                            <option value="WP Kuala Lumpur">WP Kuala Lumpur</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Serawak</option>
                         
                            </select>
                        </div>
                        </div>
                        <div class="col-sm-2">
                            <input type="submit"/>
                        </div>
                </div>
                </form>


    <div class="row justify-content-center">
        <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>State</th>
                <th>Address</th>
                <th>Contact</th>
            </tr>
        </thead>
        @foreach($center as $data)
        <tbody>       
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->state}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->contact}}</td>
            </tr>   
        </tbody>
        @endforeach 
    </table>
        </div>
    </div>
</div>
@endsection
