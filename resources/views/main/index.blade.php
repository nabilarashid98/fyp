@extends('layout.app')

@section('content')


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" src="img" ><rect width="100%" height="100%" fill="#777"/></svg>
          <img class="d-block w-50 h-150" src="images/picture 4.png"
        alt="First slide">
        <hr>
        <div class="container">
          <div class="carousel-caption text-left">
            <hr>
            <h1>Screening Test</h1>
            <p>Screening test are designed to give an indication of possible dyslexic difficulties.They are not a diagnosis.</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('mainscreening') }}" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
       <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
        alt="Third slide">
        <div class="container
        " align="right">
          <div class="carousel-caption text-right">
            <h1>Myths of Dyslexia.</h1>
            <p>There are many misconceptions about dyslexia even though it has been
              researched at length for many years now. You want know more about it ? </p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('mythsdyslexia')}}" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
         <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
        alt="Second slide">
        <div class="container" align="right"> 
          <div class="carousel-caption text-right">
            <h1>Dyslexia is real ! </h1>
            <p> Here are some helpful facts about dyslexia.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
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


 

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <div class="col-xs-1" align="center">
        <h2 class="featurette-heading" >Successful and famous people with dyslexia. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">These individuals make a difference because of their difference. Some of the biggest names in movies, music and sports are people who struggled in school with learning and thinking differences. Here are a number of the celebrities who found their passion and overcame their challenges.</p>
      </div>
    </div>
      <div class="col-md-5">
       <img class="img-responsive" src="images/image 1.jpg" width="500" height="500" alt="about">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      
      <div class="col-md-7 order-md-2">
        <div class="col-xs-1" align="center">
        <h2 class="featurette-heading">Dyslexia can occur anywhere on the IQ Spectrum! <span class="text-muted">Low IQ CAN NOT rule out dyslexia.</span></h2>
        <p class="lead">Regardless of high or low overall scores on an IQ test, children with dyslexia show similar patterns of brain activity, according to researchers supported by the National Institutes of Health.</p>
      </div>
    </div>
      <div class="col-xs-1" align="left">
      <div class="col-md-5 order-md-1">
         <img class="img-responsive" src="images/image 4.png" width="400" height="500" alt="home">
      </div>
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <div class="col-xs-1" align="center">
        <h2 class="featurette-heading">Signs of dyslexia. <span class="text-muted">Get know about it.</span></h2>
        <p class="lead">Dyslexia is a learning disorder that involves difficulty reading due to problems identifying speech sounds and learning how they relate to letters and words (decoding). Also called reading disability, dyslexia affects areas of the brain that process language.</p>
      </div>
    </div>
      <div class="col-md-5">
        <img class="img-responsive" src="images/image 3.jpg" width="500" height="500" alt="home">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection
