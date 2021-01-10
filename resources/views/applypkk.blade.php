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
      
        <h1 align="center"> What is PPKI ? </h5>
       
<img class="img-responsive" src="{{url('images/ppki.jpg')}}" width="400" height="400" alt="home">
<br>
<br>

<h5> What is PPKI ? 
</h5>
<p class=>Schools that have classes for special students are fully administered by the State Education Department, Ministry of Education Malaysia</p>
    <br>

<h5> Who can enroll in the Special Education Integration Program (PPKI) ? 
</h5>
<ul>
  <li>The students with visual impairments.</li>
  <li>The students with hearing problems</li>
  <li>The studentss with learning difficulties</li>
</ul>  
    <br>

<h5> Characteristic of students with special needs ? 
</h5>
<ul>
  <li>Dyslexia</li>
  <li>Autisme</li>
  <li>Syndrome down</li>
  <li>Epilepsy</li>
  <li>Slow learner</li>
  <li>Cerebral palsy</li>
  <li>Discalculia</li>
  <li>Dysgraphia</li>
  <li>Acalculia</li>
</ul>  
    <br>
  
 <h5> Procedure for admission to PPKI without OKU card and get additional assistance during examination without OKU Card
</h5>
<ul>
  <li>Get the BPPOKU form issued by JKM, (OKU registration application form).<br>
      <p><a href="https://www.moh.gov.my/index.php/file_manager/dl_item/624746305a584e305833426b5a69397661335576516d39795957356e5831426c6257396f62323568626c39515a57356b59575a3059584a68626c3950533155756347526d">Borang BPPOKU</a></p>
  </li>
  <li>Fill in the BPPOKU form from JKM and get the doctor's confirmation</li>
  <li>Submit a copy to PPD to apply for admission to PPKI</li>
  <li>A copy to PPKI School after getting placement from PPD.</li>
  <li>A copy to JKM if you want to apply for OKU Card (If you do not want to apply, there is no need to submit to JKM)</li><br>
  <p>* The complete BPPOKU form with the confirmation of the Doctor is an official document with the same value of use as OKU Card when dealing with MoE (BPPOKU form users do not get full facilities like OKU Cardholders and will not get EMK allowance or MAS low fare facility, KTM etc.)</p>
 
</ul>  
        </div>
      

        <div id="right">
          <br>
          <h3 align="center">News Update</h3>
          <br>
         
<div class="card">
     <div class="card" style="width:100%" style="height: 5%">
   <img class="card-img-top" src="images/new2.jpg" alt="Card image" style="width:100%">
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
