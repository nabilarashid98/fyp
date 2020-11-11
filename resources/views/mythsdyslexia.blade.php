@extends('layout.app')

@section('content')
 <br>
 <br>
 <br>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p.a {
  font: 20px Arial, sans-serif;
}

p.b {
  font: italic bold 12px/30px Georgia, serif;
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
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  top: -5px;
  left: 105%;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}

</style>
</head>
<body>

<h1>6 Common Myths About Dyslexia</h1>

<img src="{{ url('/images/image1.jpg') }}" width="460" height="345" alt="home">

<p class="b">Scientists know more than ever about dyslexia. <br>
	But there are still a lot of misconceptions about this common learning difference.<br>
	That can make it hard to know what’s accurate and how to best support your child.<br>
    Here’s the truth behind seven myths about dyslexia.</p>

<div class="row">
  <div class="column">
    <img class="img-responsive" src="{{ url('/images/myth1.png') }}" alt="myth 1" style="width:100%">
  </div>
  <div class="column">
    <img class="img-responsive" src="{{ url('/images/myth2.png') }}" alt="myth 2" style="width:100%">
  </div>
  <div class="column">
    <img class="img-responsive" src="{{ url('/images/myth3.png') }}" alt="myth 3" style="width:100%">
  </div>
</div>

<br>
<br>
<br>
<br>

<div class="row">
  <div class="column">
    <img class="img-responsive" src="{{ url('/images/myth4.png') }}" alt="myth 4" style="width:100%">
  </div>
  <div class="column">
    <img class="img-responsive" src="{{ url('/images/myth5.png') }}" alt="myth 5" style="width:100%">
  </div>
  <div class="column">
    <img class="img-responsive" src="{{ url('/images/myth6.png') }}" alt="myth 6" style="width:100%">
  </div>
</div>


</body>

</html>


@endsection