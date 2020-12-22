@extends('layout.app')

@section('content')


  
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

p.b {
  font: italic bold 12px/30px Georgia, serif;
}

h1 {
  text-align: center;
}

h3 {
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

.right {
  width: 20%;

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
}


</style>

<body>
  
  <div class="row mt-100">
    <div class="col-md-8">
        <div class="card">
          <br>
            
                <h1 class="text-center">Finance Support</h5>

                <br>  
            
               <div class="row">
             <div class="column right">
            <div class="card-block">
                <p class="text-center">
                  

<img class="img-responsive" src="{{url('images/finance.jpg')}}" width="460" height="345" alt="home">

<p class=>Some parents have a some difficulty to send their children to private center 
             which that can help their children to improve the learning disabilty.
             This is because of some private center are expensive.</p>
    <br>


  
 
<h3> How I can get finance support for my children ? 
</h3>
<br>
<p class> 1. You can get your finance suppor from Jabatan Kebajikan Masyarakat (JKM)<br>
             but to get that you must have OKU card.<br>
          2. You also can get your finance support from Pusat Zakat at any city and state<br>
             in Malaysia based on your income.<br>
          3. You also can get your finance support from children's school which known as <br>     PPKI for monthly but to get that you have OKU card.  
          </p>
<br>
<br>

<div>
<youtube class="your-centered-div">
<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</youtube>
</div>












</body>

</html>


@endsection


