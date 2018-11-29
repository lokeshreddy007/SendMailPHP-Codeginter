 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Lane</title>
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
      .kich {
       
       /*border:solid Gray;*/
       /*border-width: 2px;*/
       border-style: solid;
        /*border-color: black;*/
        background-color:white;
      }
      @import url(http://fonts.googleapis.com/css?family=Raleway:400,500,700);
*, *::after, *::before {
  box-sizing: border-box; }

.toggle-button {
  margin: 0 20px; }

/*
 * Toggle button styles
 */
.toggle-button {
  position: relative;
  display: inline-block;
  color: #fff; }
  .toggle-button label {
    display: inline-block;
    text-transform: uppercase;
    cursor: pointer;
    text-align: left; }
  .toggle-button input {
    display: none; }
  .toggle-button__icon {
    cursor: pointer;
    pointer-events: none; }
    .toggle-button__icon:before, .toggle-button__icon:after {
      content: "";
      position: absolute;
      top: 45%;
      left: 35%;
      transition: 0.2s ease-out; }


/*
 * Toggle button styles
 */
.toggle-button--vesi label {
  height: 30px;
  line-height: 30px;
  transition: all 0.2s;
  border-radius: 2rem; }
  .toggle-button--vesi label:before, .toggle-button--vesi label:after {
    position: absolute;
    right: 1.5rem;
    transition: all 0.2s .15s ease-out; }
  .toggle-button--vesi label:before {
    content: attr(data-on-text); }
  .toggle-button--vesi label:after {
    content: attr(data-off-text); }

.toggle-button--vesi input[type=checkbox] + label {
  width: 110px;
  background: #FF5335; }
  .toggle-button--vesi input[type=checkbox] + label:before {
    opacity: 0;
    transform: translate(0, 20px); }
  .toggle-button--vesi input[type=checkbox] + label:after {
    opacity: 1;
    transform: translate(0, 0); }

.toggle-button--vesi input[type=checkbox]:checked ~ label {
  width: 150px;
  background: #61B136; }
  .toggle-button--vesi input[type=checkbox]:checked ~ label:before {
    opacity: 1;
    transform: translate(0, 0); }
  .toggle-button--vesi input[type=checkbox]:checked ~ label:after {
    opacity: 0;
    transform: translate(0, -20px); }

.toggle-button--vesi input[type=checkbox]:checked ~ .toggle-button__icon:before {
  transform: translate(-10%, 100%) rotate(45deg);
  width: 16.66667px; }

.toggle-button--vesi input[type=checkbox]:checked ~ .toggle-button__icon:after {
  transform: translate(30%) rotate(-45deg); }

.toggle-button--vesi .toggle-button__icon {
  position: absolute;
  left: 0;
  top: 0;
  height: 30px;
  width: 20px; }
  .toggle-button--vesi .toggle-button__icon:before, .toggle-button--vesi .toggle-button__icon:after {
    height: 3px;
    border-radius: 3px;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1); }
  .toggle-button--vesi .toggle-button__icon:before {
    width: 25px;
    transform: rotate(90deg); }
  .toggle-button--vesi .toggle-button__icon:after {
    width: 25px;
    transform: rotate(0); }

/*
 * Toggle button variables
 */
/*
 * Toggle button styles
 */

.toggle-button--vesi1 label {
  height: 30px;
  line-height: 30px;
  transition: all 0.2s;
  border-radius: 2rem; }
  .toggle-button--vesi1 label:before, .toggle-button--vesi1 label:after {
    position: absolute;
    right: 1.5rem;
    transition: all 0.2s .15s ease-out; }
  .toggle-button--vesi1 label:before {
    content: attr(data-on-text); }
  .toggle-button--vesi1 label:after {
    content: attr(data-off-text); }

.toggle-button--vesi1 input[type=checkbox] + label {
  width: 110px;
  background: #FF5335; }
  .toggle-button--vesi1 input[type=checkbox] + label:before {
    opacity: 0;
    transform: translate(0, 20px); }
  .toggle-button--vesi1 input[type=checkbox] + label:after {
    opacity: 1;
    transform: translate(0, 0); }

.toggle-button--vesi11 input[type=checkbox]:checked ~ label {
  width: 150px;
  background: #61B136; }
  .toggle-button--vesi11 input[type=checkbox]:checked ~ label:before {
    opacity: 1;
    transform: translate(0, 0); }
  .toggle-button--vesi11 input[type=checkbox]:checked ~ label:after {
    opacity: 0;
    transform: translate(0, -20px); }

.toggle-button--vesi11 input[type=checkbox]:checked ~ .toggle-button__icon:before {
  transform: translate(-10%, 100%) rotate(45deg);
  width: 16.66667px; }

.toggle-button--vesi1 input[type=checkbox]:checked ~ .toggle-button__icon:after {
  transform: translate(30%) rotate(-45deg); }

.toggle-button--vesi1 .toggle-button__icon {
  position: absolute;
  left: 0;
  top: 0;
  height: 30px;
  width: 20px; }
  .toggle-button--vesi1 .toggle-button__icon:before, .toggle-button--vesi1 .toggle-button__icon:after {
    height: 3px;
    border-radius: 3px;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1); }
  .toggle-button--vesi1 .toggle-button__icon:before {
    width: 25px;
    transform: rotate(90deg); }
  .toggle-button--vesi1 .toggle-button__icon:after {
    width: 25px;
    transform: rotate(0); 
    
.toggle-button--vesi2 label {
  height: 30px;
  line-height: 30px;
  transition: all 0.2s;
  border-radius: 2rem; }
  .toggle-button--vesi2 label:before, .toggle-button--vesi2 label:after {
    position: absolute;
    right: 1.5rem;
    transition: all 0.2s .15s ease-out; }
  .toggle-button--vesi2 label:before {
    content: attr(data-on-text); }
  .toggle-button--vesi2 label:after {
    content: attr(data-off-text); }

.toggle-button--vesi2 input[type=checkbox] + label {
  width: 110px;
  background: #FF5335; }
  .toggle-button--vesi2 input[type=checkbox] + label:before {
    opacity: 0;
    transform: translate(0, 20px); }
  .toggle-button--vesi2 input[type=checkbox] + label:after {
    opacity: 1;
    transform: translate(0, 0); }

.toggle-button--vesi21 input[type=checkbox]:checked ~ label {
  width: 150px;
  background: #61B136; }
  .toggle-button--vesi21 input[type=checkbox]:checked ~ label:before {
    opacity: 1;
    transform: translate(0, 0); }
  .toggle-button--vesi21 input[type=checkbox]:checked ~ label:after {
    opacity: 0;
    transform: translate(0, -20px); }

.toggle-button--vesi21 input[type=checkbox]:checked ~ .toggle-button__icon:before {
  transform: translate(-10%, 100%) rotate(45deg);
  width: 16.66667px; }

.toggle-button--vesi2 input[type=checkbox]:checked ~ .toggle-button__icon:after {
  transform: translate(30%) rotate(-45deg); 

.toggle-button--vesi2 .toggle-button__icon {
  position: absolute;
  left: 0;
  top: 0;
  height: 30px;
  width: 20px; }
  .toggle-button--vesi2 .toggle-button__icon:before, .toggle-button--vesi2 .toggle-button__icon:after {
    height: 3px;
    border-radius: 3px;
    background: #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1); }
  .toggle-button--vesi2 .toggle-button__icon:before {
    width: 25px;
    transform: rotate(90deg); }
  .toggle-button--vesi2 .toggle-button__icon:after {
    width: 25px;
    transform: rotate(0); 
   
    
    .ki{
        hover
    }


       
</style>
  

</head>

<body>
    
    <div class="container">
          <div class = bb>
        <div class="row">
          
            <h2 style="color: white;">Pls select what are products u r need</h2>

             <div class="col-md-4">

           <h2 style="color: white;">Kitchen</h2>
            <div class="toggle-button toggle-button--vesi">
                <div id ="kick" data-filename="1" style="margin-left:-20px;">
                <input id="toggleButton8" type="checkbox">
                <label for="toggleButton8" data-on-text="Selected" data-off-text="Select"></label>
                <div style="margin-left:-20px;"  class="toggle-button__icon"></div>
            </div>
                </div>
           </div>
                  <div class="col-md-4">     
           <h2  style="color: white;">Wardrobes
</h2>

            <div class="toggle-button toggle-button--vesi">
                <div id ="war" data-filename="" style="margin-left:-20px;">
                <input id="toggleButton9" type="checkbox">
                <label for="toggleButton9" data-on-text="Selected" data-off-text="Select"></label>
                <div style="margin-left:-20px;"  class="toggle-button__icon"></div>
            </div>
                </div>
                       </div>
                    <div class="col-md-4">     
           <h2  style="color: white;">Interior</h2>

            <div class="toggle-button toggle-button--vesi">
                 <div id ="in" data-filename="" style="margin-left:-20px;">
                <input id="toggleButton10" type="checkbox">
                <label for="toggleButton10" data-on-text="Selected" data-off-text="Select"></label>
                <div style="margin-left:-20px;"  class="toggle-button__icon"></div>
            </div>
                </div>
                                 
                      </div> 
              
            </div>
    
                      <div id="about-02">

            <div class="content-box-md">

                <div class="container">

<!--                    <div class="row">
                        
                        <div class="col-md-4 col-sm-4 wow fadeInLeft">
                             <div class = "kich">
                             About item 01 
                            <div class="ki">
                                <i class="fa fa-rocket"></i>
                                <h3  style="color: black;">Modular kitchens</h3>
                                <hr>
                                <h4 style="color: black;">Modular kitchens with accessories that enhance efficiency, and in finishes you'll love! Perfected to suit your space, lifestyle and budget.
                                    .</h4>
                            </div>

                        </div>
</div>                        
                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s">
                             About item 02 
                            <div class="about-item text-center">
                                <i class="fa fa-eye"></i>
                                <h3 style="color: white;">Vision</h3>
                                <hr>
                                <h4 style="color: white;">Our vision is to empower students to acquire,demonstrate,articulate and value knowledge and skills that will support them,as life-long learners, to participate in and contribute to the global world and practise the core values of the school respect, tolerance & inclusion, and excellence.</h4>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4  wow fadeInRight">
                             About item 03 
                            <div class="about-item text-center">
                                <i class="fa fa-pencil"></i>
                                <h3>Passion</h3>
                                <hr>
                                <p>Our vision Teaching is about the student,not the teacher.Being able to inspire others to think for themselves could be one of the greatest gifts you could ever give them.Helping students to Discover there greatest gifts and passions.Continue to discover and grow in there destiny and purpose</p>
                            </div>

                        </div>

                    </div>

                </div>-->

            </div>

        </div>

      
                     
              </div>
        </div>
    <script>
    $(document).ready(function() {
$('#kick').hover(
    function(){
        //we get our current filename and use it for the src
        var linkIndex = $(this).attr("data-filename");
        $(this).addClass('hover');
        $('.big img').attr('src','<?php echo base_url();?>images/'+linkIndex+'.jpg');
    },
    function(){
        $(this).removeClass('hover');
        $('.big img').attr('src', '<?php echo base_url();?>images/'+linkIndex+'.jpg')');
    }
);
});
  $(document).ready(function() {
$('#war').hover(
    function(){
        //we get our current filename and use it for the src
        var linkIndex = $(this).attr("data-filename");
        $(this).addClass('hover');
        $('.big img').attr('src','<?php echo base_url();?>images/'+linkIndex+'.jpg');
    },
    function(){
        $(this).removeClass('hover');
        $('.big img').attr('src', '');
    }
);
});

 $(document).ready(function() {
$('#in').hover(
    function(){
        //we get our current filename and use it for the src
        var linkIndex = $(this).attr("data-filename");
        $(this).addClass('hover');
        $('.big img').attr('src','<?php echo base_url();?>images/'+linkIndex+'.jpg');
    },
    function(){
        $(this).removeClass('hover');
        $('.big img').attr('src', '');
    }
);
});

    </script>
</body>
</html>
