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


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
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
      
        <h1 align="center"> Finance Support ? </h5>
         <img class="img-responsive" src="{{url('images/finance.jpg')}}" width="460" height="345" alt="home">

<p class=>Some parents have a some difficulty to send their children to private center 
             which that can help their children to improve the learning disabilty.
             This is because of some private center are expensive.Several parents confused how they can get a financial support for their childen. So, here the solution for all the parents.</p>
    <br>


  
 
<h3> How I can get finance support for my children ? 
</h3>
<br>
<p class> 1. You can get your finance suppor from Jabatan Kebajikan Masyarakat (JKM)<br>
             but to get that you must have OKU card.<br><br>

          2. You also can get your finance support from Pusat Zakat at any city and state<br>
             in Malaysia based on your income.<br><br>

          3. You also can get your finance support from children's school which known as <br>     PPKI school for monthly but to get that you have OKU card.  <br>
          </p>
<br>
<br>
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
  
  <br>
  <br>
  
   <div class="card" style="width:100%" style="height: 30%">
    <img class="card-img-top" src="images/news3.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Emotional Support For Parents Of Dyslexic Children.</h5>
      <p class="card-text">Some parents feel stress out to take care their dyslexic children because there are no emotional support from other parents or experts. Here are some tips for those who struggle with dyslexia kids.</p>
      <a href="{{ route('emotionalsupport')}}" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>

  <br>
  <br>
   <div class="card" style="width:100%" style="height: 5%">
 <img class="card-img-top" src="images/news1.jpg" alt="Card image" style="width:100%">
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


