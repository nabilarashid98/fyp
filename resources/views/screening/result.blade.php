@extends('layout.app')

@section('content')
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br>
                <h1 class="center">Result</h1>
                <div class="card-body">
                        <div class="form-group">
                            <h3>Dyslexia Warning Signs</h3>
                            <label class="label">{{$result}}</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
