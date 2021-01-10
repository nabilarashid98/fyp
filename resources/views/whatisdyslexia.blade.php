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

youtube {
    width: 560px; /* you have to have a size or this method doesn't work */
    height: 315px; /* think about making these max-width instead - might give you some more responsiveness */

    position: center;
    margin: auto;
    top: 50%;
    margin-left: 170px;
    transform: translate(-50%, -50%);
 
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>


<body>
    <div id="parent">
      <br>
  
        <div id="left">
          <br>
      
        <h1 align="center"> What is Dyslexia ? </h1>
          <br>
 <p class="text-center">
                  

<img class="img-responsive" src="{{url('images/image 1.jpg')}}" width="460" height="345" alt="home">
<br>
<p>Dyslexia is a learning disability in reading.People with dyslexia have trouble reading at a good pace and without mistakes.There are no available statistics for Malaysia but it is estimated that 4% – 8 % of school going children have dyslexia.More boys than girls are affected than girls. 
</p>
 
<p > The children that have a dyslexia difficulty with poor reading, difficulty writing, or mixing up words. Adults may also have this developmental disability, too. Early in adulthood, several persons are diagnosed. Others do not know until they grow older that they have dyslexia.<br></p>

<p>Children with dyslexia also have normal vision and are almost as intelligent as their colleagues. But in school, they fail further because it takes longer for them to read. Word processing issues will also make it difficult to spell, write, and speak clearly.</p>
<br>

<h5>Are there any strengths with being dyslexics?</h5>
<br>
<ul>
<li>Gifted dyslexics include some famous politicians (e.g. Lee Kuan Yew), performers (e.g. Whoopi Goldberg), artists (e.g. Leonardo da Vinci) and scientists (e.g. Albert Einstein)</li>
<li>Some are very imaginative and creative</li>
<li>Many are multi-dimensional thinkers</li>
<li>They can also be very good with hand skills or sports</li>
</ul>
<br>
<br>

<h5>What are potential problems with dyslexics?</h5>
<br>
<ul>
<li>They are often mislabelled as lazy, stupid or slow</li>
<li>There is risk to a healthy self image as the child may develop poor self esteem</li>
<li>If detection and management are delayed, the child may develop</li>
<li>Emotional complications (eg depression)</li>
<li>Behavioural problems (eg oppositional, conduct problems)</li>
<li>Academic under-achievement (eg school drop-out)</li>
</ul>
<br>
<div>
<youtube class="your-centered-div">
<iframe width="420" height="345" src="https://www.youtube.com/embed/cJ85oYRC0Yg">
</iframe>
</youtube>
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


