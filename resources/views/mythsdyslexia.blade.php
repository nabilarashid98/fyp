@extends('layout.app')

@section('content')

 


<br>
<br>
<br>
<br>
<style>
*{
  margin: 0;
  padding: 0;
}

#parent {
  display: flex;
  justify-content: space-around;
}

#left {
  border: 1px solid lightgray;
  background-color: white;
  width: 63%;
 padding: 40px;
}

#right {
  border: 1px solid lightgray;
  background-color: white;
  width: 20%;
  height: 20%;
}


.card-header {
    background-color: #DA95DE 
}



.card-block {
    margin-top: 10px
}

p.a {
  font: 20px Arial, sans-serif;
}

ul.b {
  list-style-type: square;
}

h1 {
  text-align: center;
}


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  align:center;
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

.card-columns{
  margin-left: 40px;
  width:  1000px;
  height: 300px;
}


div.polaroid {
  width: 40%;
  background-color: pink;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left: 50px;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="parent">
      <br>
      <div id="left">
        <br>
        <h1 align="center"> Myths of Dyslexia </h1>
          <div class="row">
            <div class="column">
              <div class="card-block">
                <p class="text center">
  <img class="img-responsive" src="{{url('images/myth.png')}}" width="550" height="345" alt="home">
  <br>

<p>Scientists know more than ever about dyslexia. But there are still a lot of misconceptions about this common learning difference. That can make it hard to know what’s accurate and how to best support your child.Here’s the truth behind seven myths about dyslexia.</p>
    <br>

    <div class="row">
<div class="polaroid">
  <div class="container"> 
<div class="row">
  <div class="column">
  <img class="img-responsive" src="{{url('images/myth1.png')}}" alt="myth 1" style="width:63%">
  

   
  </div>
 
  </div>
  </div>
</div>


  <div class="polaroid">
  <div class="container"> 
  <div class="column">
    <img class="img-responsive" src="{{url('images/myth2.png')}}" alt="myth 2" style="width:70%">
    
  </div>
</div>
</div>
</div>

 <div class="row">
<div class="polaroid">
  <div class="container"> 
<div class="row">
  <div class="column">
  <img class="img-responsive" src="{{url('images/myth3.png')}}" alt="myth 1" style="width:63%">
   

   
  </div>
 
  </div>
  </div>
</div>


  <div class="polaroid">
  <div class="container"> 
  <div class="column">
    <img class="img-responsive" src="{{url('images/myth4.png')}}" alt="myth 2" style="width:70%">
    
  </div>
</div>
</div>
</div>
<div class="row">
<div class="polaroid">
  <div class="container"> 
<div class="row">
  <div class="column">
  <img class="img-responsive" src="{{url('images/myth5.png')}}" alt="myth 1" style="width:63%">
  

   
  </div>
 
  </div>
  </div>
</div>


  <div class="polaroid">
  <div class="container"> 
  <div class="column">
    <img class="img-responsive" src="{{url('images/myth6.png')}}" alt="myth 2" style="width:70%">
    
  </div>
</div>
</div>
</div>









    </div>
  </div>
</div>
</div>

  <div id="right">
          <br>
          <h3 align="center">News Update</h3>
          <br>
         


    
     <div class="card">
     <div class="card" style="width:100%" style="height: 5%">
   <img class="card-img-top" src="{{asset('images/new2.jpg')}}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Homeschooling During Coronavirus Tips for Parents</h5>
      <p class="card-text">Home-schooling is a short-term response to COVID-19 school cuts or a long-term dedication to teaching your child, there are particular difficulties and needs for home-schooling children with dyslexia.</p>
      <a href="{{ route('homeschoolingduringcovid19')}}" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>
  
  
   <div class="card" style="width:100%" style="height: 30%">
    <img class="card-img-top" src="{{asset('images/news3.jpeg')}}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Emotional Support For Parents Of Dyslexic Children.</h5>
      <p class="card-text">Some parents feel stress out to take care their dyslexic children because there are no emotional support from other parents or experts. Here are some tips for those who struggle with dyslexia kids.</p>
      <a href="{{ route('emotionalsupport')}}" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>

  
   <div class="card" style="width:100%" style="height: 5%">
 <img class="card-img-top" src="{{asset('images/news1.jpg')}}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">How COVID 19 Can Help Children With Dyslexia Thrive</h5>
      <p class="card-text">he social isolation that resulted from the pandemic of COVID 19 now provides parents with an ability to observe and support their child who may have fallen through the net.</p>
      <a href="{{ route('covid19thrivedyslexia')}}" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>
  
    </div>
  </div>
    </div>



      </body>
</html>


@endsection