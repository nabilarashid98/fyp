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
      
        <h1 align="center"> How Dyslexia is Diagnosed ?</h5>
        <div class="row">
             <div class="column">
            <div class="card-block">
                <p class="text-center">
                  

<img class="img-responsive" src="{{url('images/diagnose.png')}}" width="600" height="345" alt="home">

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
  <p>This is a step for parents or any guardians if they want to take their children for further checkup </p>
 
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text-center">1. Child Specialist</h4>
        <p>Go to the nearest specialist clininc
        for children to get referral letter before you go to hospital.
         The child specialist able to give advice whether your children
          have a dyslexia or not</p>
      </div>
    </div>

    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">2. Development Paediatrician</h4>
        <p >The development paedtrician/paedtrician give some test or questionaire to your children. Them will give you some advice and seek to refer opthomologist.
      </div>
    </div>
  </div>

   <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">3. Opthomologist</h4>
        <p >The doctor refer your children to seek <br>
        opthomologist because to rule out eye problem. Maybe your<br>
         children cannot read because the eye problem or reflactive error.</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">4. Audiologist</h4>
        <p>Dyslexia is a language processing issue. They need to make a test with listening and so, it want to rule out the neurologist issue that related that refrain the children from hearing the sound. </p>
      </div>
    </div>  
  </div>

  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">5. Phsychologist</h4>
        <p >The psychologist give you some different
         test that related with educational and advise and help you
          to seek occupational or speech therapist.</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <h4 class="text">6. Occupational/Speech Therapist</h4>
        <p >Occupational therapists are in a unique 
        position to support a dyslexic child's learning by addressing
         key components of skills such as oculomotor function,
       executive functioning, and motor coordination.</p>
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
