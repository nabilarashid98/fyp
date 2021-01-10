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
      
        <h1 align="center"> Dyslexia Sign and Symptoms </h1>
        <br>

<img class="img-responsive" src="{{url('images/dyslexia.jpg')}}" width="400" height="400" alt="home">

          <br>
<p> Before your child starts kindergarten, symptoms of dyslexia may be hard to detect, although certain early clues can suggest a concern. Your child's teacher may be the first to find a problem after your child hits school age. Severity varies, but when an infant begins learning to read, the situation always becomes obvious. These activities are useful for all kids, but especially those at risk for dyslexia.</p>
<br>

<h5> Pre-School Children 
</h5>
<p>In certain cases, when a child begins kindergarten, signs of dyslexia may be observed. 
  <br>

Symptoms might include: </p>

<ul>
  <li>impaired growth of speech relative to other children of the same generation (although this can have many different causes). </li>
  <li>difficulties with vocabulary, such as not being able to correctly pronounce long terms and "jumbling" phrases (for example, saying "hecilopter" instead of "helicopter", or "beddy tear" instead of "teddy bear") </li>
  <li>difficulties voicing themselves using spoken words, such as not being able to recall the right word to use, or wrongly bringing together sentences </li>
  <li>trouble with, or no interest in, learning alphabet letters</li>
</ul>  
 
    <br>

<h5> School Children</h5>
<p>Dyslexia signs typically become more evident as kids enter school and tend to rely more on learning how to read and write.<br>

In children aged 5 to 12, the signs of dyslexia include:</p>
<ul>
  <li>Reading way below the planned age range </li>
  <li>Avoiding activities including reading</li>
  <li>Trouble seeing (and sometimes hearing) similarities and letter and phrase variations </li>
  <li>Spelling difficulties </li>
  <li>Spending an extraordinarily long time doing assignments including reading or writing </li>
  <li>Putting letters and numbers in the wrong way round (such as writing "6" instead of "9", or "b" instead of "d") </li>
  <li>Poor reading or making mistakes when reading aloud</li>

</ul>  
    <br>
  
 <h5>Associated Problems</h5>
<ul>
 <p>Any individuals with dyslexia may have other difficulties that are not specifically related to reading or writing.<br>

This include the following: </p>
  <li>Difficulty with numbers (dyscalculia) </li>
  <li>Bad recall in the short term </li>
  <li>Concentration difficulties and low attention time, namely attention deficit hyperactivity disorder (ADHD) </li>
  <li>Physical synchronisation issues (developmental co-ordination disorder, also called DCD or dyspraxia)</li>
 
</ul>  
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