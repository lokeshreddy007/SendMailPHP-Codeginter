 <!DOCTYPE html>
<html lang="en">
<head>    <title>Home Lane</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

<!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <style>
          body{
			  
		  background-image: url("<?php echo base_url();?>images/4.jpg");    
		  background-size: cover;
		  background-repeat: no-repeat;
		  }
           .color{
          background-color:#5bc0de;
          
          }
        .pricingdiv{ 
  display: flex;
  flex-wrap: wrap;
  font-size: 16px;
  justify-content: center;
  font-family: 'Source Sans Pro', Arial, sans-serif;
  
}

.pricingdiv ul.theplan{
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  color: black;
  width: 280px; /* width of each table */
  margin-right: 20px; /* spacing between tables */
  margin-bottom: 1em;
  border: 1px solid gray;
  background-color:white;
  background-image: url("<?php echo base_url();?>images/9.jpg");
  transition: all .5s;
}

.pricingdiv ul.theplan:hover{ /* when mouse hover over pricing table */
  transform: scale(1.05);
  transition: all .5s;
  z-index: 100;
  box-shadow: 0 0 10px gray;
}

.pricingdiv ul.theplan .center{
  margin: 0 auto;
  text-align: center;
}

.pricingdiv ul.theplan img{
  max-width: 80%;
  height: auto;
}

.pricingdiv ul.theplan li{
  padding: 10px 10px;
  position: relative;
  border-bottom: 1px solid #eee;
}

.pricingdiv ul.theplan li.title{
  font-weight: bold;
  text-align: center;
  padding: 30px 10px;
  background: rgb(40, 193, 203);
  color: white;
  box-shadow: 0 -10px 5px rgba(0,0,0,.1) inset;
  text-transform: uppercase;
}

.pricingdiv ul.theplan:nth-of-type(2) li.title{
  background: rgb(249, 111, 118);
  color: white;
}
    
.pricingdiv ul.theplan:nth-of-type(3) li.title{
  background: rgb(210, 117, 251);
  color: white;
}

.pricingdiv ul.theplan li b{
  text-transform: uppercase;
}
.pricingdiv ul.theplan li.title b{
  font-size: 250%;
}

.pricingdiv ul.theplan:last-of-type{ /* remove right margin in very last table */
  margin-right: 0;
}

/*very last LI within each pricing UL */
.pricingdiv ul.theplan li:last-of-type{
  text-align: center;
  margin-top: auto; /*align last LI (price botton li) to the very bottom of UL */
}  

.pricingdiv a.pricebutton{
  background: red;
  text-decoration: none;
  padding: 10px;
  display: inline-block;
  margin: 10px auto;
  border-radius: 5px;
  color: white;
  font-weight: bold;
  border-radius: 5px;
  text-transform: uppercase;
}

@media only screen and (max-width: 600px) {
  .pricingdiv ul.theplan{
    border-radius: 0;
    width: 100%;
    margin-right: 0;
  }
  
  .pricingdiv ul.theplan:hover{
    transform: none;
    box-shadow: none;
  }
  
  .pricingdiv a.pricebutton{
    display: block;
  }
}
.check{
     display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.check input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    
}

/* On mouse-over, add a grey background color */
.check:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.check input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.check input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.check .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

    </style>
    </head>

    <body>
    <div class="pricingdiv">
    <ul class="theplan">
        <li class="title"><b>Kitchen</b><br />Design</li>
        <div style="background-color:whitesmoke;padding-left: 10px;" >
        <img  style="padding:-55px;" src="<?php echo base_url();?>images/kict.jpg" alt="Smiley face" >
       </div>
        <li style="background-color:black;color:white;"> <p>Your Kitchen is the heart of your home,
        and the kitchen designs have to be properly
       executed in order to allow the rest of the home
        to function properly.</p><li>
           
        <label class="check" style="color:white;">Select Kitchen
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
        <!--<li><input   class="check "type="checkbox" name="kick" ></li>-->
        
 <!--<li><a class="pricebutton" href="http://ergonomictrends.com/best-ergonomic-office-chairs-under-300-reviews/" target="_blank" rel="nofollow"><span class="icon-tag"></span> Check Out</a></li>-->
    </ul>
    <ul class="theplan">
        <li class="title"><b>Wardrobes</b><br />Design</li>
         <div style="background-color:whitesmoke;padding-left: 10px;" >
        <img src="<?php echo base_url();?>images/w.jpg" alt="Smiley face" >
       </div>
        <li style="background-color:black;color:white;"> <p>Your Kitchen is the heart of your home,
        and the kitchen designs have to be properly
       executed in order to allow the rest of the home
        to function properly.</p><li>
        
        
<!--        <li><b>Material:</b> Nylon w/ Breathable Glass Fiber</li>-->
<!--        <li><b>Weight:</b> 55 lbs</li>
        <li><b>Max Weight:</b> 330 lbs</li>
        <li><b>Head Rest:</b> Yes</li>
    <li><b>Lumbar Support:</b> Yes</li>
        <li><b>Arm Rest:</b> <span class="icon-check"></span></li>
        <li><b>Lumbar Support:</b> <span class="icon-check"></span></li>
    <li><b>Warranty:</b> 30 Days Money Back</li>
        <li><b>Support:</b> 2 Years</li>-->
<!--<img src="<?php echo base_url();?>images/kict.jpg" alt="Smiley face" >-->
        <label class="check" style="color:white;">Select Wardrobes
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
        <!--<li><a class="pricebutton" href="http://ergonomictrends.com/best-ergonomic-office-chairs-reviews-buyers-guide/" target="_blank" rel="nofollow"><span class="icon-tag"></span> Check Out</a></li>-->
        </ul>
    <ul class="theplan">
        <li class="title"><b>Interior</b><br />Design</li>
        <div style="background-color:whitesmoke;padding-left: 10px;" >
        <img src="<?php echo base_url();?>images/i.jpg" alt="Smiley face" >
       </div>
        
       <li style="background-color:black;color:white;"> <p>Your Kitchen is the heart of your home,
        and the kitchen designs have to be properly
       executed in order to allow the rest of the home
        to function properly.</p><li>
 
        
        
        
        
        <!--<li class="ethighlight"><b>Dimensions:</b> 24.8W x 47.3H</li>-->
<!--        <li><b>Material:</b> Nylon w/ Breathable Glass Fiber</li>
        <li><b>Weight:</b> 50 lbs</li>
        <li><b>Max Weight:</b> 350 lbs</li>
        <li><b>Head Rest:</b> Yes</li>
        <li><b>Arm Rest:</b> <span class="icon-close"></span></li>
        <li><b>Warranty:</b> 30 Days Money Back</li>-->
        <label class="check" style="color:white;">Select Interior
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
        <!--<li><a class="pricebutton" href="http://ergonomictrends.com/best-ergonomic-office-chairs-under-200-reviews/" target="_blank" rel="nofollow"><span class="icon-tag"></span> Check Out</a></li>-->
    </ul>
</div>
 <div class="btn-group">
         
  <button  onclick="window.location.href='<?php echo base_url();?>Estimate/se'"  type="submit" style="margin-left:640px;color:#040706" class="btn btn-primary">Submit</button>
 

       
</div>   
        </form>
</body>
</html>