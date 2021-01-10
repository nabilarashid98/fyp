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
      
        <h1 align="center"> Activities With Dyslexia Kids </h1>
          <br>
          <img class="img-responsive" src="{{url('images/ACTIVITY.jpg')}}" width="550" height="345" alt="home">
          <br>
          <br>
<p> If you feel like your child is at risk for dyslexia, here are some of the activities that can be very effective in helping them improve skills that can allow them to compensate for the challenges that accompany the disability. These activities are useful for all kids, but especially those at risk for dyslexia.</p>
    <br>

<h5> Fine motor activities
</h5>
<p> Fine motor skills are necessary for the activities that involve smaller movements in wrists, hands and fingers. They are crucial for our ability to perform most of the usual, daily self-care tasks such as buttoning clothes, cutting food, tying our shoes or brushing teeth, but also for precise coloring, drawing and writing.
  <br>

Activities that can help with improving these skills: </p>

<ul>
  <li>Easy crafts for kids. Give them opportunities to use different materials such as paper, cardboard, wood or glue, and color, cut or combine them to make something new.</li>
  <li>Coloring exercises, mazes on paper or exercises that involve drawing shapes of different sizes.</li>
  <li>Beading, sewing, knitting etc.</li>
</ul>  
  <p><a href="https://handsonaswegrow.com/fine-motor-skills-activities/">You can find more ideas here!</a></p>
    <br>

<h5> Spelling Stations</h5>
<p> Dyslexic students fail to see the series of letters in a word, and sometimes mentally reorder letters in sentences.Education Corner has developed "Spelling Stations" to support children who face spelling difficulties due to dyslexia. This lesson plan allows students  to sharpen their spelling skills by using different visual, auditory, literary, and verbal reinforcement stations.<br>
You can create a range of stations depending on the materials and services at your school. Here are a few ideas to get you started: </p>

<ul>
 <li>Letter magnets: students spell words of magnetic letters on metal surfaces.</li>
<li>Puzzle time: this station consists of spelling worksheets (such as crossword puzzles and word searches) to promote the identification of terms.</li>
<li>Colorful terms: students write assigned spelling words using various colours for each letter to establish connections between colours and letters, encouraging the preservation of accurate letter sequences.</li>
<li>Word painting: using pencils, stickers, glitter and other art materials, students spell out and decorate terms on construction paper, associating the spelling of the word with creative expression.</li>
</ul>

<h5> Reading With Your Children</h5>
<p>Kids seem to hate doing things they know they're not doing right. That's reading for children with dyslexia. So, strive to cultivate as much of their passion for reading as possible. Encourage them to gather their own books and create their own personal libraries. Support them pick the books they want so you can read them together. Create a family game that you both love reading.<br><br>
Here are a few examples of fun rhyming books you can read during this activity:</p>
<ul>
<li>Sheep in a Jeep by Nancy Shaw</li>
<li>Brown Bear, Brown Bear, What Do You See? By Eric Carle and Bill Martin, Jr.</li>
<li>Where the Sidewalk Ends by Shel Silverstein</li>
<li>Llama Llama Red Pajama by Anna Dewdney</li>
<li>One Fish, Two Fish, Red Fish, Blue Fish by Dr. Seuss</li>
</ul>

<h5>AudioBooks</h5>
<p>Since children with dyslexia are always poor readers, assigning them to print books on their own will frustrate them. Instead, consider incorporating audiobook files to a take-home print book. That way, the student can read along with the narrator without being wrapped up in challenging words or letters.
  
</p>
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


