@extends('layout.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
	body {
    background-color: #E0E0E0

}


.mt-100 {
    margin-top: 100px;
    margin-left: 200px
}

.card-header {
    background-color: #DA95DE 
}

h5 {
    color: #fff
}

.card-block {
    margin-top: 10px
}

p.a {
  font: 20px Arial, sans-serif;
}

p.b {
  font: italic bold 12px/30px Georgia, serif;
}

h1 {
  text-align: center;
}

p{
	text-align: center;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 5px;
}

.center { 
  margin: 0 auto; width: 400px; 
}

youtube {
    width: 560px; /* you have to have a size or this method doesn't work */
    height: 315px; /* think about making these max-width instead - might give you some more responsiveness */

    position: center;
    margin: auto;
    top: 50%;
    margin-left: 170px;
    transform: translate(-50%, -50%);
 
}
}


</style>
</head>
<body>
	
	<div class="row mt-100">
    <div class="col-md-8">
        <div class="card">
        	<br>
            
                <h1 class="text-center">Dyslexia ?</h5>

                <br>	
            
               <div class="row">
             <div class="column">
            <div class="card-block">
                <p class="text-center">
                	

<img class="img-responsive" src="{{url('images/image 1.jpg')}}" width="460" height="345" alt="home">

<p class="b">Dyslexia is a learning disability in reading.<br>
People with dyslexia have trouble reading at a good pace and without mistakes. <br>
They may also have a hard time with reading comprehension, spelling, and writing. <br>
But these challenges aren’t a problem with intelligence.</p>
    <br>


  
 
<h1> What is Dyslexia ?
</h1>
<br>
<p class="b"> Dyslexia is a common condition that makes it hard to read. <br>
Some experts believe that between 5 and 10 percent of people have it. <br>
Others say as many as 17 percent of people show signs of reading challenges.</p>
<br>
<br>

<div>
<youtube class="your-centered-div">
<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</youtube>
</div>












</body>

</html>


@endsection


