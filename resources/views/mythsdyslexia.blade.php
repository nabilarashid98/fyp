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

body {margin:10px;}

div.polaroid {
  width: 40%;
  background-color: pink;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left: 50px;
}

div.container {
  text-align: center;
  padding: 20px 20px;
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

</style>
</head>
<body>
	
	<div class="row mt-100">
    <div class="col-md-8">
        <div class="card">
        	<br>
            
                <h1 class="text-center">6 Myths of Dyslexia</h5>

                <br>	
            
               <div class="row">
             <div class="column">
            <div class="card-block">
                <p class="text-center">
                	

<img class="img-responsive" src="{{url('images/image 1.jpg')}}" width="460" height="345" alt="home">

<p class="b">Scientists know more than ever about dyslexia. <br>
	But there are still a lot of misconceptions about this common learning difference.<br>
	That can make it hard to know what’s accurate and how to best support your child.<br>
    Here’s the truth behind seven myths about dyslexia.</p>
    <br>


  
 
 
<div class="row">
<div class="polaroid">
	<div class="container"> 
<div class="row">
  <div class="column">
  <img class="img-responsive" src="{{url('images/myth1.png')}}" alt="myth 1" style="width:70%">
   <p>Cinque Terre</p>

   
  </div>
 
  </div>
  </div>
</div>


  <div class="polaroid">
  <div class="container"> 
  <div class="column">
    <img class="img-responsive" src="{{url('images/myth2.png')}}" alt="myth 2" style="width:70%">
    <p>Cinque Terre</p>
  </div>
</div>
</div>
</div>

 <div class="row">
<div class="polaroid">
	<div class="container"> 
<div class="row">
  <div class="column">
  <img class="img-responsive" src="{{url('images/myth3.png')}}" alt="myth 1" style="width:70%">
   <p>Cinque Terre</p>

   
  </div>
 
  </div>
  </div>
</div>


  <div class="polaroid">
  <div class="container"> 
  <div class="column">
    <img class="img-responsive" src="{{url('images/myth4.png')}}" alt="myth 2" style="width:70%">
    <p>Cinque Terre</p>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="polaroid">
	<div class="container"> 
<div class="row">
  <div class="column">
  <img class="img-responsive" src="{{url('images/myth5.png')}}" alt="myth 1" style="width:70%">
   <p>Cinque Terre</p>

   
  </div>
 
  </div>
  </div>
</div>


  <div class="polaroid">
  <div class="container"> 
  <div class="column">
    <img class="img-responsive" src="{{url('images/myth6.png')}}" alt="myth 2" style="width:70%">
    <p>Cinque Terre</p>
  </div>
</div>
</div>
</div>














</body>

</html>


@endsection