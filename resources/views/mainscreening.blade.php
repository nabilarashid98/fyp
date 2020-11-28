@extends('layout.app')

@section('content')
<br>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin-right:20px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

img {
  width: 40%;

  position: absolute;
  top: 60%;
  left: 70%;
  transform: translate(-50%, -50%);
}



  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</style>
<body>
  
<div class="container p-3 my-3 bg-light text-black border">
  <h1 class="text-left">Dyslexia Screening Test</h1>
  <br>
  <p>Screening test are designed are designed to give an indication of<br> 
    possible dyslexia difficulties.They are not a disgnosis. </p>
  <p>If your think your child might have a dyslexia,there's only one way <br>
   to know for sure.You"ll need to have your child treated for dyslexia<br>
   as part of full evaluation.Testing for dyslexia will identify specific <br>
  areas of weakness in reading</p>
    <p>You can answer the question for yourself or you can use this evaluation <br>
      as a way of learning more about your children as a suspect of dyslexia <br> 
      or not.</p>
      <p>The survey has 20 questions in a single page. For the best result,you should<br>
       try to answer as many questions as possible, but you can skip any questions <br>
       which do not apply.
      </p>
      <p>Your results will be shown as soon you finish answering the questions.
      </p>

      <button class="button" style="vertical-align:middle"  a href= "{{ route('screening') }}">
        <span>Take a test now </span></button>

     <img src="images/disleksia.jpg">



</div>




</body>
</html>


@endsection