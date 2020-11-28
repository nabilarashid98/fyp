@extends('layout.app')

@section('content')
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html>
<style>
body {
    background-color: #E0E0E0
}

.mt-100 {
    margin-top: 150px;
    margin-left: 200px
}



h5 {
    color: #fff
}

.card-block {
    margin-top: 10px
}



p.b {
  font: italic bold 12px/30px Georgia, serif;
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
  flex: 33.33%;
  padding: 5px;
}


</style>
<div class="row mt-100">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">6 Myths of Dyslexia</h5>
            </div>
               <div class="row">
             <div class="column">
            <div class="card-block">
                <p class="text-center">
                	

<img src="images/image 1.jpg" width="460" height="345" alt="home">

<p class="text-center">Scientists know more than ever about dyslexia. <br>
	But there are still a lot of misconceptions about this common learning difference.<br>
	That can make it hard to know what’s accurate and how to best support your child.<br>
    Here’s the truth behind seven myths about dyslexia.</p>
                    
                        <img src="images/image 1.jpg"></span>
                        
                           
                    </p>
                </div>
            </div>
           
             
            
             <div class="column">
             <div class="card-block">
                <p class="text-center">
                   
                <img src="images/image 1.jpg"></span>
                      
                           
                           
                    </p>
                    </div>
                    </div>
         
         </div>
    </div>
</div>

</body>
</html>



@endsection