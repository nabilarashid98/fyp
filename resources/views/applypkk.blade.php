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
  text-align: left;
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
  padding: 30px;
}

.center { 
  margin: 0 auto; width: 400px; 
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
</head>
<body>
  
  <div class="row mt-100">
    <div class="col-md-8">
        <div class="card">
          <br>
            
                <h1>Procedure to apply PPKI and additional time during examination</h1>

                <br>  
            
               <div class="row">
             <div class="column">
            <div class="card-block">
                <p class="text-center">
                  

<img class="img-responsive" src="{{url('images/ppki.jpg')}}" width="400" height="400" alt="home">
<br>
<br>

<h5> What is PPKI ? 
</h5>
<p class=>Schools that have classes for special students are fully administered by the State Education Department, Ministry of Education Malaysia</p>
    <br>

<h5> Who can enroll in the Special Education Integration Program (PPKI) ? 
</h5>
<ul>
  <li>The students with visual impairments.</li>
  <li>The students with hearing problems</li>
  <li>The studentss with learning difficulties</li>
</ul>  
    <br>

<h5> Characteristic of students with special needs ? 
</h5>
<ul>
  <li>Dyslexia</li>
  <li>Autisme</li>
  <li>Syndrome down</li>
  <li>Epilepsy</li>
  <li>Slow learner</li>
  <li>Cerebral palsy</li>
  <li>Discalculia</li>
  <li>Dysgraphia</li>
  <li>Acalculia</li>
</ul>  
    <br>
  
 <h5> Procedure for admission to PPKI without OKU card and get additional assistance during examination without OKU Card
</h5>
<ul>
  <li>Get the BPPOKU form issued by JKM, (OKU registration application form).<br>
  	  <p><a href="https://www.moh.gov.my/index.php/file_manager/dl_item/624746305a584e305833426b5a69397661335576516d39795957356e5831426c6257396f62323568626c39515a57356b59575a3059584a68626c3950533155756347526d">Borang BPPOKU</a></p>
  </li>
  <li>Fill in the BPPOKU form from JKM and get the doctor's confirmation</li>
  <li>Submit a copy to PPD to apply for admission to PPKI</li>
  <li>A copy to PPKI School after getting placement from PPD.</li>
  <li>A copy to JKM if you want to apply for OKU Card (If you do not want to apply, there is no need to submit to JKM)</li><br>
  <p>* The complete BPPOKU form with the confirmation of the Doctor is an official document with the same value of use as OKU Card when dealing with MoE (BPPOKU form users do not get full facilities like OKU Cardholders and will not get EMK allowance or MAS low fare facility, KTM etc.)</p>
 
</ul>  
    <br>

<br>
<br>













</body>

</html>

@endsection
