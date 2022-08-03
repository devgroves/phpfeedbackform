<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
     <!-- <link rel="stylesheet" href="./resources/css/app.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<style>
    #payment-form
    {
        margin-top:3%;
margin-left:25%;

 z-index: 1;
    }
   @import url(https://fonts.googleapis.com/css?family=Roboto:400,300);
* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  height: 100%;
  font-family: Roboto, san-serif;
  font-weight: 300;
  background-color: #f5f6f7;
}

/* Form element setup */
/* #payment-form {
  position: absolute;
  top: 0;
  left: 50%;
  width: 100%;
  transform: translateX(-50%);
  margin: 2rem 0;
  z-index: 1;
} */
.flex-container
{
display:flex;
/* justify-content:space-around; */
}
fieldset {
  margin: 0 0 1rem 0;
  padding: 0;
  border: none;
}

legend {
  font-weight: bold;
  font
}

legend,
label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

input[type=text],
textarea,
select {
  display: block;
  padding: 0.5rem;
  width: 50%;
  background-color: white;
  border-radius: 0.25rem;
  border: 1px solid #5bb0e2;
  outline: none;
  /* List some properties that might change */
  transition-property: none;
  transition-duration: none;
}
input[type=text]:focus,
textarea:focus,
select:focus {
  border-color: #ef7ead;
}

#textarea {
  
  
  width:50%;
}

input[type=text],
select {
  height: 34px;
}

select {
  font-size: 0.875rem;
}

input[type=radio]
 {
  position: relative;
  top: 5px;
  width: 22px;
  height: 22px;
  margin: 0 0.5rem;
  background-color: #a9969657;
  border: 1px solid #5bb0e2;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  /* List some properties that might change */
  transition-property: none;
  transition-duration: none;
}
.checkbox {
		display: inline-block;
		cursor: pointer;
		
	}
input[type=radio] {
  border-radius: 5px;
  display: inline-block;
}
input[type=radio]:checked {
  background-color: #5bb0e2;
  border: none;
}
input[type=radio]:checked:after {
  display: block;
  content: "";
  height: 4px;
  width: 10px;
  border-bottom: 3px solid #fff;
  border-left: 3px solid #fff;
  transform: translate(5px, 6px) rotate(-45deg) scale(1);
}

button {
  display: block;
   margin-left: 14%;
  padding: 0.5rem 2rem;
  font-size: 125%;
  color: white;
  border: none;
  border-radius: 0.25rem;
  background-color: #5bb0e2;
  outline: none;
  box-shadow: 0 0.4rem 0.1rem -0.3rem rgba(0, 0, 0, 0.1);
  /* We'll talk about this next */
  transform: perspective(300px) scale(0.95) translateZ(0);
  transform-style: preserve-3d;
  /* List the properties that you're looking to transition.
     Try not to use 'all' */
  transition-property: none;
  /* This applies to all of the above properties */
  transition-duration: none;
}
button:hover {
  cursor: pointer;
  background-color: #ff96c8;
  box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  transform: scale(1.1) rotateX(0);
}
button:active {
  background-color: #ef7ead;
  transform: scale(1.05) rotateX(-10deg);
}
</style>
</head>
<body>
    <div>

    	<form method="POST" id="payment-form"
          action="{!! URL::to('nextpage') !!}">  
    	  <h2 class="w3-text-blue">Feedback form</h2>
    	   {{ csrf_field() }}
   <fieldset>
    <label for="firstName">Full name</label>
    <input type="text" name="name" id="firstName" required>
  </fieldset>

  <fieldset id='group3'>
    <label for="textarea">Nature of your visit</label>
    <label for="textarea">Comments</label>
    <textarea name="nature_of_visit" rows="2" cols="50" id="textarea" required></textarea>
  </fieldset>

  <fieldset id='group1'>
    <legend>1.Did we respond your customer Service needs today?</legend>
   
    <div class="flex-container">
    <div>
    <input type="radio" class="check1" name="responding_customer_needs_response" value="yes" checked>
    <label for="check1">yes</label><br>
    </div>
    <div>
    <input type="radio" class="check2" name="responding_customer_needs_response" value="no">
    <label for="check2" class="checkbox">No</label><br>
    </div>
     <div>
    <input type="radio" class="check3" name="responding_customer_needs_response" value="some">
    <label for="check3">Somewhat</label>
    </div></div>
     <label for="textarea">Comments</label>
    <textarea name="responding_customer_needs_comments" rows="2" cols="50" id="textarea1" required ></textarea>
  </fieldset>

  <fieldset id='group2'>
    <legend>2.Was our customer services provide to you in an accessible manner?</legend>
     
    <div class="flex-container">
    <div>
    <input type="radio" class="check1" name="providing_accessible_service_response" value="yes" checked >
    <label for="check1">yes</label><br>
    </div>
    <div>
    <input type="radio" class="check2" name="providing_accessible_service_response" value="no">
    <label for="check2" class="checkbox">No(please Explain)</label><br>
    </div>
     <div>
    <input type="radio" class="check3" name="providing_accessible_service_response" value="some" >
    <label for="check3">Somewhat(please Explain)</label>
    </div></div>
    <label for="textarea">Comments</label>
     <textarea name="providing_accessible_service_comments" rows="2" cols="50" id="textarea2" ></textarea>
  </fieldset>
 
<fieldset id='group3'>
    <legend>3.Did you have any problems in accessing our products and services?</legend>
    
    <div class="flex-container">
    <div>
    <input type="radio" class="check1" name="accessing_products_service_problem_response" value="yes" checked >
    <label for="check1">yes</label><br>
    </div>
    <div>
    <input type="radio" class="check2" name="accessing_products_service_problem_response" value="no">
    <label for="check2" class="checkbox">No(please Explain)</label>
    </div>
     <div>
    <input type="radio" class="check3" name="accessing_products_service_problem_response" value="some">
    <label for="check3">Somewhat(please Explain)</label>
    </div></div>
     <label for="textarea">Comments</label>
    <textarea name="accessing_products_service_problem_commentss" rows="2" cols="50" id="textarea3" required></textarea>
  </fieldset>
  <fieldset>
     <legend>4.Please add any other Comments you may have</legend>
      <label for="textarea">Comments</label>
    <textarea name="other_comments" rows="2" cols="50" id="textarea4" required></textarea>
  </fieldset>
  <fieldset>
  <button type="submit">Submit</button> 
  </fieldset> 
</div>    
    </form>
        <!-- <form action="" method="POST">
    <label for="fullName">Your Name</label> <br>
    <input type="text" name="fullName"><br><br>

    <label for="gender">Your Gender</label> <br>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="female">Female<br><br>

    <label for="email">Your E-mail</label> <br>
    <input type="text" name="email"><br>
    <br>

    <label for="comments">Your Comments</label> <br>
    <textarea name="comments"></textarea><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
</form> -->
</body>
</html>