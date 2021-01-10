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
      
        <h1 align="center"> Method Teaching For Dyslexia</h1>
          <br>
<p> Dyslexic students have a learning difference. Their minds can't retain knowledge as easily as non-dyslexics, sometimes making learning a long, challenging, and often impossible task.<br><br>

However, with the help of a compassionate teacher – well trained with proven and tested techniques – dyslexic students are able to learn and become extremely competitive.</p>
    <br>

<h5> The Orton–Gillingham Method</h5>
<p> This famous approach has long been used to teach dyslexia children how to learn. By concentrating on the relation between letters and their sounds, children may give more meaning to the language and gain stronger overall understanding. It also uses a multi-sensory approach, which ensures that light, sound, touch and action all work in unison while learning vocabulary.</p>


 <h5> The Structured Literacy Approach</h5>
<p>This method of intentional instruction involves methods such as clapping syllables to help children properly segment words into their components or phonemes. It also emphasises on linking sounds to their symbols (letters) in two ways: physically, through reading, and auditoryly, through spelling. This approach uses a systemic and continuous progression of learning, ensuring that lessons are logically related and based on each other.</p>

<h5>Using Video</h5>
<p>Right now, while simulated lessons are the rule, video is a prime teaching method. Luckily, film is a great resource for students with dyslexia. The moving picture is easier to understand than written text for most children with dyslexia. Experts agree that video with same-language subtitles will improve reading abilities. Dyslexic students may use subtitles to enhance their pronunciation.
</p>

<h5>Educational Games</h5>
<p>The best thing about games developed for dyslexic children is that any learner will benefit from them, so that they can be conveniently incorporated into lessons for the whole class. Nothing is going to excite the students more than playing games!<br>
There are few example of educational games :
</p>
<ul>
  <li>Nessy.com – Nessy offers a range of PC games that help learners understand the sounds that make up words – an area where dyslexics particularly struggle. Their colourful, cartoony style is appealing and engaging to kids.</li>
  <li>Dyslexiagames.com – The workbooks available here are full of puzzles, 3D drawings, and reading activities, tailored to dyslexic learners’ strength: visual thinking.</li>
  <li>Simplex Spelling – If you have iPads in your classroom,the apps in the Simplex Spelling series are an excellent choice. They help build up students’ understanding of phonics and how words are constructed. The series placed 3rd in the 2012 Best App Ever Awards – Best Elementary Student App.</li>
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