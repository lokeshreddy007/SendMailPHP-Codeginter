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

<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

<!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">


  <style>
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
  transform: translate(30%) rotate(-45deg); }

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
    .bd{
        border-style: solid;

    }
</style>
  

</head>

<body>
    
    <div class="container">
        <div class="row">
           
                    <div style="border: thin solid black; margin-top: 40px;" class="col-sm-6">
                       <div  class = "bd">  
                        <div class="form-group">
           <h2>Kitchen</h2>
           <div class="col-sm-8">
            <div class="toggle-button toggle-button--vesi">
                <div style="margin-left:-30px;">
                <input id="toggleButton8" type="checkbox">
                <label for="toggleButton8" data-on-text="Selected" data-off-text="Select"></label>
                <div style="margin-left:-30px;"  class="toggle-button__icon"></div>
            </div>
                </div>
                        </div>
           </div>
                          <div class="form-group">
                              <div class="col-sm-8">
           <h2>Wardrobes
</h2>

            <div class="toggle-button toggle-button--vesi">
                <div style="margin-left:-30px;">
                <input id="toggleButton9" type="checkbox">
                <label for="toggleButton9" data-on-text="Selected" data-off-text="Select"></label>
                <div style="margin-left:-30px;"  class="toggle-button__icon"></div>
            </div>
                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-8">
           <h2>Interior</h2>

            <div class="toggle-button toggle-button--vesi">
                <div style="margin-left:-30px;">
                <input id="toggleButton10" type="checkbox">
                <label for="toggleButton10" data-on-text="Selected" data-off-text="Select"></label>
                <div style="margin-left:-30px;"  class="toggle-button__icon"></div>
            </div>
                </div>
                          </div>
                          </div>
        
                       </div>
                         </div>
            <div class="col-sm-6"><br>
                hello
            </div>
                        
            </div>
    </div>



</body>
</html>
