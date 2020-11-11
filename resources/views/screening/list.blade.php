@extends('layout.app')

@section ('content')
<br>
<br>
<div class="cointainer">
	<form method="post" action="{{route('postscreening')}}">
		{{csrf_field()}}
	
	<div class="row">
            <div class="col-lg-3">
            </div>

            <div class="col-lg-6">
            <div class="card">
            	<div class="card-header">
            		<small>Family History And Background Information</small>
            		
            	</div>
            	<div class="card-body card-body">
            		<div class="form-group">
                        <label class=" form-control-label">1. Do another family member have a dyslexia history  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="one" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="one" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="one" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">2. Do another family member have a history with delayed speech  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

            		
            	</div>
            </div>
            	<br>


            	<div class="card">
            	<div class="card-header">
            		<small>General Characteristic</small>
            		
            	</div>

            	<div class="card-body card-body">
            		<div class="form-group">
                        <label class=" form-control-label">1.Does your children can differentiate between left and right ??</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="one" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="one" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="one" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                        <div class="form-group">
                        <label class=" form-control-label">2. Does your children can copy letters, number and symbols  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="four" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="four" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="four" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">3. Does your children have a difficulty with spelling ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="five" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="five" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="five" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">4. Would your child repeat words while reading out loud, mix up letters or change the word order without noticing  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="six" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="six" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="six" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">5. Does your children have a trouble learning numbers, days of the week, colors, shapes, and how to spell and write his or her name?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="seven" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="seven" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="seven" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">6. Does your children unable to recall the right word  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="eight" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="eight" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="eight" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">7. Does your children have a difficulty in staying on task  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="nine" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="nine" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="nine" value="MAYBE">
                                    <label >MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
                <br>

                  <div class="card">
                <div class="card-header">
                    <small>Word Recognition, Decoding and Spelling </small>
                    
                </div>
                <div class="card-body card-body">
                    <div class="form-group">
                        <label class=" form-control-label">1. When spelling puts letters in the wrong order, e.g. which for wich ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="one" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="one" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="one" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">2. Does your children usually confuse with letters ‘b’ and ‘d’ ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                      <div class="form-group">
                        <label class=" form-control-label">3. Does your children confuse with vowel sounds, e.g. writing ‘i’ for ‘e’ ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>


                    
                </div>
            </div>

            <br>
            

                <div class="card">
                <div class="card-header">
                    <small>Arithmetic</small>
                    
                </div>
                <div class="card-body card-body">
                    <div class="form-group">
                        <label class=" form-control-label">1. Does your children have a problems with the arithmetic but not with words and problems on paper showing maths steps ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="one" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="one" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="one" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">2. Does your children can recognize and write number from 1 – 20 ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                     <div class="form-group">
                        <label class=" form-control-label">3. Does your children can do simple math such as 6 + 4  ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                     <div class="form-group">
                        <label class=" form-control-label">4. Does your children confuse to write answer  of 6×7 as 24 instead of 42 ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>
                <br>



                <div class="card">
                <div class="card-header">
                    <small>Memory and Cognition</small>
                    
                </div>
                <div class="card-body card-body">
                    <div class="form-group">
                        <label class=" form-control-label">1. Does your children excellent long-term memory for images, places or interactions ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="one" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="one" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="one" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">2. Does your children have a low memory for unfamiliar sequences, or facts?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                     <div class="form-group">
                        <label class=" form-control-label">3. Does your children can  listening to, remembering, and following directions that contain multiple steps such as step how to tie shoelaces ?</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                     <div class="form-group">
                        <label class=" form-control-label">4. Does your child spell inconsistently, misspelling words she already knows ??</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>
                <br>
            </div>

             <div class="card">
                <div class="card-header">
                    <small>Reading Comprehension</small>
                    
                </div>
                <div class="card-body card-body">
                    <div class="form-group">
                        <label class=" form-control-label">1. Is that your children can read and answer this question ? 
     (“The birds were flying in the             ”)
      a. sky
      b. air
</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="one" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="one" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="one" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">2.  Is that your children can answer this question ?
    “What colors consists were on the Malaysian flag?”
</label>
                        <br>
                        <div class="form-check-inline form-check">
                            <div class="row">
                                <div class="col-12">
                                    <input type="radio" id="YES" name="two" value="YES">
                                    <label for="male">YES</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="NO" name="two" value="NO">
                                    <label for="male">NO</label><br>
                                </div>
                                <div class="col-12">
                                    <input type="radio" id="MAYBE" name="two" value="MAYBE">
                                    <label for="male">MAYBE</label><br>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>
                <br>




            <div class="col-lg-3">
            </div>
            <br>
            <div class="cointainer";>
            	<div class="row">
            		<div class="col-6">
            			<button type="save" class="btn btn-primary">
            				Submit
            			</button>
            			
            		</div>
            	</div>
            </div>

        </div>


</form>
</div>

@endsection