@extends('layout.app')

@section('content')

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
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
</head>

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


<br>

<div class="container">
  <h2>News Update</h2>
  <p>Add the .stretched-link class to a link inside the card, and it will make the whole card clickable (the card will act as a link):</p>

   <div class="card-columns">
  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/new2.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Homeschooling During Coronavirus Tips for Parents</h5>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>


  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/news3.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Emotional Well-Being Support Available For Parents Of Dyslexic Children.</h5>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>


  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/news1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">How COVID 19 Can Help Children With Dyslexia Thrive</h5>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">Read More</a>
    </div>
  </div>



</div>
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
       <img class="img-responsive" src="images/image 1.jpg" width="350" height="350" alt="about">
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
         <img class="left" src="images/image 4.png" width="350" height="350" alt="home">
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
        <img class="img-responsive" src="images/image 3.jpg" width="350" height="350" alt="home">
      </div>
    </div>
        <hr class="featurette-divider">


<div class="container">
    <div class="row">
             <form role="form" class="col-md-9 go-right">
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
            <input id="phone" name="phone" type="tel" class="form-control" required>
            <label for="phone">Primary Phone</label>
        </div>
        <div class="form-group">
            <textarea id="message" name="phone" class="form-control" style="height: 150px" required></textarea>
            <label for="message">Message</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection
