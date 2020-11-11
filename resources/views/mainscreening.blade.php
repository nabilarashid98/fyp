@extends('layout.app')

@section('content')
<br>
<br>
<br>
<br>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Text Center</title>
<style>


.cointainer
{
  width: 1000px;
  height: 400px;
  margin: 100px auto;
  background: #fff;
  position: relative;;
}

.cointainer h1{
  margin: 0;
  padding: 0;
  font-family: arial;
  font-size: 3em;
  text-transform: uppercase;
  text-align: center;;
  position: relative;
  top: 50%;
  color: #555;
  transform: translate(-50%);
}

</style>
</head>
<body>
  
  <div align="center" class="cointainer">
  <h1>Screening Test</h1>


        
  </div>


</body>
</html>

@endsection