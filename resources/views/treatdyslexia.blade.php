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

ul.b {
  list-style-type: square;
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

.card-columns{
  margin-left: 40px;
  width:  1000px;
  height: 300px;
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
                  

<img class="img-responsive" src="{{url('images/treat.jpg')}}" width="460" height="345" alt="home">

<ul class="b">There's no single test that can diagnose dyslexia. A number 
             of factors are considered : <br> <br>
             <li>Your child's development,educational issues and medical history. 
              The doctor will likely ask you question about these areas and want 
              to know about any conditions that run in the family, including whether 
              any family members have a learning disability. </li>
              <br>
              <li> Home life. The doctor may ask for a description of your family
              and home life, including who lives at home and whether there are 
              any problems at home.</li>
              <br>
              <li>Questionnaires. The doctor may have your child, family members
              or teachers answer written <br>questions. Your child may be asked to take
              tests to identify reading and language abilities.</li>
              <br>
              <li>Vision, hearing and brain (neurological) tests.These can help
              determine whether another disorder <br>may 
              be causing or adding to your 
              child's poor reading ability.</li>
              <br>
              <li>Psychological testing.The doctor may ask you and your child 
              questions to better understand your child's mentalhealth. This can help
              determine whether social problems, anxiety or depression may be limiting
              your child's abilities.</li>
              <br>
              <li>Testing reading and  other academic skills. Your child may take a set of educational tests an have the process and quality of reading skills analyzed
              by a reading expert.</p>
    <br>
</div>
  </div>
</div>
  
 <div class="container">
  <h2 class="text-center">What to do ? </h2>
  <p>The .card-columns class creates a masonry-like grid of cards. </p>
 
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text-center">1. Child Specialist</h4>
        <p class="card-text">Go to the nearest specialist clininc<br>
        for children to get referral letter before you go to hospital.<br>
         The child specialist able to give advice whether your children<br>
          have a dyslexia or not</p>
      </div>
    </div>

    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">2. Development Paediatrician</h4>
        <p class="card-text">The development paedtrician/paedtrician<br> 
        give some test or questionaire to your children. Them will<br> 
      give you some advice and seek to refer opthomologist</p>
      </div>
    </div>
  </div>

   <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">3. Opthomologist</h4>
        <p class="card-text">The doctor refer your children to seek <br>
        opthomologist because to rule out eye problem. Maybe your<br>
         children cannot read because the eye problem or reflactive error.</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">4. Audiologist</h4>
        <p class="card-text">Dyslexia is a language processing issue. They need to make a test with listening and so, it want to rule out the neurologist issue that related that refrain the children from hearing the sound. </p>
      </div>
    </div>  
  </div>

  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">5. Phsychologist</h4>
        <p class="card-text">The psychologist give you some different<br>
         test that related with educational and advise and help you<br>
          to seek occupational or speech therapist.</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">6. Occupational/Speech Therapist</h4>
        <p class="card-text">occupational therapists are in a unique <br>
        position to support a dyslexic child's learning by addressing<br>
         key components of skills such as oculomotor function, <br>
       executive functioning, and motor coordination.</p>
      </div>
    </div>
  </div>
</div>


   
 










</body>

</html>
@endsection
