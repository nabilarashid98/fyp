@extends('layout.app')

@section('content')

<br>
<br>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 15%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.left {
  width: 70%;
  align-content: center;
}

.right {
  width: 20%;
  align-content: center;
}


/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #E0E0E0;
}
</style>
</head>
<body>



<div class="row">
  <div class="column left">
    <div class="card">
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







    </div>
  </div>

  
  
  <div class="column right">
    <div class="card">
     <div class="card" style="width:100%" style="height: 5%">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
  </div>
  
  <br>
  <br>
  
   <div class="card" style="width:100%" style="height: 30%">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
  </div>

  <br>
  <br>
   <div class="card" style="width:100%" style="height: 5%">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
  </div>
  
    </div>
  </div>
</div>

</body>
</html>


 @endsection