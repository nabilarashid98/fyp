@extends('layout.app')

@section('content')
<br>
<br>
<div class="row">       
    <div class="col-sm-2"></div>
      <div class="col-sm-8">
         @if(Session::has('flash_message'))
       <div class="alert alert-success"><span class="fa fa-check"></span><em> {!! session('flash_message') !!}</em></div>
         @endif
      </div>
      <div class="col-sm-2"></div>
</div>



<style>

 body {
  font-family: Georgia, serif;
}


  .form-control{
    background: transparent;
}

form {
 width: 200px;
 margin: 20px;
}

form > div {
 position: relative;
 overflow: hidden;
}

form input, form textarea {
 width: 100%;
 border: 2px solid gray;
 background: none;
 position: relative;
 top: 0;
 left: 0;
 z-index: 1;
 padding: 8px 12px;
 outline: 0;
}

form input:valid, form textarea:valid {
 background: white;
}
form input:focus, form textarea:focus {
 border-color: #357EBD;
}

form input:focus + label, form textarea:focus + label {
 background: #357EBD;
 color: white;
 font-size: 70%;
 padding: 1px 6px;
 z-index: 2;
 text-transform: uppercase;
}

form label {
 -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
 transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
 position: absolute;
 color: #999;
 padding: 7px 6px;
 font-weight: normal;
}
form textarea {
 display: block;
 resize: vertical;
}
form.go-bottom input, form.go-bottom textarea {
 padding: 12px 12px 12px 12px;
}
form.go-bottom label {
 top: 0;
 bottom: 0;
 left: 0;
 width: 100%;
}

form.go-bottom input:focus, form.go-bottom textarea:focus {
 padding: 4px 6px 20px 6px;
}

form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
 top: 100%;
 margin-top: -16px;
}

form.go-right label {
 border-radius: 0 5px 5px 0;
 height: 100%;
 top: 0;
 right: 100%;
 width: 100%;
 margin-right: -100%;
}
form.go-right input:focus + label, form.go-right textarea:focus + label {
 right: 0;
 margin-right: 0;
 width: 40%;
 padding-top: 5px;
}

</style>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="img" ><rect width="100%" height="100%" fill="#777"/></svg>
          <img class="d-block w-50 h-150" src="images/screeningtest.jpg"
        alt="First slide">
        <hr>
        <div class="container">
          <div class="carousel-caption text-left">
            <hr>
            <h1 style="color: black">Screening Test</h1>
            <p style="color: black">Screening test are designed to give an indication of possible dyslexic difficulties.<br>
            They are not a diagnosis.</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('mainscreening') }}" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="50%" height="50%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
       <img class="d-block w-100" src="images/myth.png"
        alt="Third slide">
        <br>
        <div class="container
        " align="right">
          <div class="carousel-caption text-right">
  
            <h1 style="color:white">Myths of Dyslexia.</h1>
            <br>
            <p style="color:white">There are many misconceptions about dyslexia even <br>
              though it has been
              researched at length for many years now. <br>
            You want know more about it ? </p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('mythsdyslexia')}}" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
         <img class="d-block w-100" src="images/dyslexia.png"
        alt="Second slide">
        <div class="container" align="right"> 
          <div class="carousel-caption text-right">
            <h1>What is PPKI ? </h1>
            <p> Some government schools offer a program for special needs <br>
            children called Program Pendidikan Khas Integrasi (PPKI). </p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('applypkk')}}" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




<div class="container p-3 my-3 bg-white text-dark">
  <br>
  <br>
  
  <div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h1 class="title">Welcome to HelperDyslexia</h1>
<br>
<p class="p1">This is a platform to help parents for those have a dyslexia children. This system provides any information about dyslexia such as beneficial info about dyslexia such as symptoms,myhts and type of method teaching for dyslexia, forum for parents to discuss any confusion about dyslexia, list of school that suitable for dyslexia kids and screnning test to know wheather your children have a dyslexia or not.</p>
</div>

</div>


<div class="col-md-offset-1 col-md-6">
<a href="#" class="about-video">
<i class="play-icon fa fa-play"></i>
<img src="images/helper.png" width="600" height="350" alt="">
</a>
</div>

</div>

</div>

</div>



</div>
<br>
<br>

<div class="container">
  <h2 align="center">News Update</h2>
  <br>
 
   <div class="card-columns">
  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/new2.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Homeschooling During Coronavirus Tips for Parents</h5>
      <p class="card-text">Home-schooling is a short-term response to COVID-19 school cuts or a long-term dedication to teaching your child, there are particular difficulties and needs for home-schooling children with dyslexia.</p>
      <a href="{{ route('homeschoolingduringcovid19')}}"class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>


  <div class="card" style="width:290px">
    <img class="card-img-top" src="images/news3.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Emotional Support For Parents Of Dyslexic Children.</h5>
      <p class="card-text">Some parents feel stress out to take care their dyslexic children because there are no emotional support from other parents or experts. Here are some tips for those who struggle with dyslexia kids.</p>
      <a href="{{ route('emotionalsupport')}}" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>


  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/news1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Why COVID 19 Will Help Dyslexia Children Thrive</h5>
      <p class="card-text">The social isolation that resulted from the pandemic of COVID 19 now provides parents with an ability to observe and support their child who may have fallen through the net. </p>
      <a href="{{ route('covid19thrivedyslexia')}}" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>



</div>
</div>

 

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="container p-3 my-3 bg-white text-dark">
  <br>
  <br>
  
  <div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h1 class="title">PPKI School</h1>
<br>
<p class="p1">PPKI is a stand for Program Pendidikan Khas Integrasi. It is a program under the public school that places students with disabilities from ADHD, autisme, down syndrome and spactics. Here's the steps how to apply PPKI school</p>
<a href="{{ route('applypkk')}}" class="primary-button">Read More</a>
</div>

</div>


<div class="col-md-offset-1 col-md-6">
<a href="#" class="about-video">
<i class="play-icon fa fa-play"></i>
<img src="images/ppki.png" width="600" height="350" alt="">
</a>
</div>

</div>

</div>

</div>



</div>

  
    <hr class="featurette-divider">

     <div class="container p-3 my-3 bg-white text-dark">
  <br>
  <br>
  
  <div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h1 class="title">Method Teaching For Dyslexia</h1>
<br>
<p class="p1">Dyslexic students have a learning difference. Their minds can't retain knowledge as easily as non-dyslexics, sometimes making learning a long, challenging, and often impossible task.However, with the help of a compassionate teacher – well trained with proven and tested techniques – dyslexic students are able to learn and become extremely competitive.</p>
<a href="{{ route('methodteachingdyslexia')}}" class="primary-button">Read More</a>
</div>

</div>


<div class="col-md-offset-1 col-md-6">
<a href="#" class="about-video">
<i class="play-icon fa fa-play"></i>
<img src="images/student.png" width="600" height="350" alt="">
</a>
</div>

</div>

</div>

</div>



</div>

  

    
    <hr class="featurette-divider">

     <div class="container p-3 my-3 bg-white text-dark">
  <br>
  <br>
  
  <div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h1 class="title">Forum For Dyslexia's Parents</h1>
<br>
<p class="p1">This is a forum for parents to dicuss any info or curious that related to dyslexia.Here to add any info or you curious about dyslexia into this forum.</p>
<a href="{{ route('addforum')}}" class="primary-button">Read More</a>
</div>

</div>


<div class="col-md-offset-1 col-md-6">
<a href="#" class="about-video">
<i class="play-icon fa fa-play"></i>
<img src="images/FORUM.png" width="600" height="350" alt="">
</a>
</div>

</div>

</div>

</div>



</div>

  


   
        <hr class="featurette-divider">


<div class="container">
    <div class="row">
             <form role="form" class="col-md-9 go-right" method="POST" action="{{ route('storefeedback') }}">
            {{ csrf_field() }}

            <h2>Feedback Form</h2>
            <p>We welcome for your feedback and we will try to implement it into our website.</p>
          
            
            <div class="form-group">
            <input id="name" name="name" type="text" class="form-control" required>
            <label for="name">Your Name</label>
        </div>
        <div class="form-group">
            <input id="email" name="email" type="email" class="form-control" required>
            <label for="email">Email Address</label>
        </div>
       
        <div class="form-group">
            <textarea id="description" name="description" class="form-control" style="height: 150px" required></textarea>
            <label for="description">Message</label>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">
                                         Submit
                                     </button>
                                   </div>
        </form>
    </div>
</div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection
