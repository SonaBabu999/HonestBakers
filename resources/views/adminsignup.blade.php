<!DOCTYPE html><html class=''>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/shamelin/pen/NqoLzO?limit=all&page=45&q=contact+" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
          

<style class="cp-pen-styles">body, 
html {
  margin: 0;
  paddin: 0;
  background: #F5F5F5;
  width: 100%;
}

.application-info-div {
  margin-left: auto !important;
  margin-right: auto !important;
  width: 800px;
  height: 120px;
  background: #FFFFFF;
  margin: 5% 0 0 0;
}

.main-connection-div {
  margin: 5px 0 0 0;
  padding: 20px;
  background: #FFFFFF;
  width:800px;
  height:550px;
  margin-left: auto !important;
  margin-right: auto !important;
}

.icon-service {
  border-right: 125px solid #F5F5F5;
  width: 120px;
  margin: 0;
  padding: 0;
}

.text-application-info-div {
  position: relative;
  top: -110px;
  left: 135px;
}

.title-text-application-info-div {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  font-size: 23px;
  font-weight: 300;
  width: 82%;
}

.description-text-application-info-div {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size; 16px;
  width: 82%;
}

.application-status {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 13px;
}

.green-text {
  color: #2ecc71;
}

.cookies-used {
  width: 800px;
  background: rgba(0, 0, 0, 0.8);
  margin-left: auto !important;
  margin-right: auto !important;
  font-family: 'Roboto', sans-serif;
  font-size: 14px;
  color: #FFF;
  margin: 5px 0 5% 0;
  font-weight: 300;
  padding: 20px;
  transition: .4s background;
  display: none;
}

.cookies-used:hover {
  background: rgba(0, 0, 0, 0.75);
}

.log-in-main-connection-div {
  width: 50%;
  left: 0;
  height: 100%;
  float: left;
}

.register-main-connection-div {
  width: 50%;
  right: 0;
  height: 100%;
  float: left;
}

.title-log-in-main-connection-div {
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  font-weight: 300;
  margin: 5px 0 0 15px;
  padding: 0;
}

.title-register-main-connection-div {
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  font-weight: 300;
  margin: 5px 0 0 15px;
  padding: 0;
}

 .main-connection-div .input-field {
   width: 80%;
   margin: 20px 0 0 30px;
 }
   
 /* label focus color */
.main-connection-div .input-field input[type=text]:focus + label {
  color: #0072ff;
  left: 0.1rem;
}

.input-field label.active {
  left: 0.1rem;
}

 /* label underline focus color */
 .main-connection-div .input-field input[type=text]:focus {
   border-bottom: 1px solid #0072ff;
   box-shadow: 0 1px 0 0 #0072ff;
 } 

/* valid color */
 .main-connection-div .input-field input[type=text].valid {
   border-bottom: 1px solid #2ecc71;
   box-shadow: 0 1px 0 0 #2ecc71;
 }

 /* invalid color */
 .main-connection-div .input-field input[type=text].invalid {
   border-bottom: 1px solid #e74c3c;
   box-shadow: 0 1px 0 0 #e74c3c;
 }

.password-forgotten {
  font-size: 13px;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  margin: 15px 0 0 30px;
  width: 100%;
  height: 100%;
}

.remember-me-check {
  position: relative;
  top: 10px;
  margin: 0 0 0 10px;
}

.password-reset-div {
  display: none;
}

.black-complete-background {
  position: fixed;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  top: 0;
  z-index: 10000;
}

.content-password-reset-div {
  position: fixed;
  background: #F5F5F5;
  width: 40%;
  height: 240px;
  min-width: 600px;
  padding: 20px;
  top: 0;
  bottom: 0;
  margin-left: auto !important;
  margin-right: auto !important;
  left: 0;
  right: 0;
  z-index: 100000;
  margin: auto;
}

.title-content-password-reset-div {
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  font-weight: 300;
}

.content-content-password-reset-div {
  margin: 20px 0 0 0;
  width: 100%;
}

.text-content-content-password-reset-div {
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  width: 100%;
}

 .content-content-password-reset-div .input-field {
   width: 50%;
   margin: 20px 0 0 0;
 }
   
 /* label focus color */
.content-content-password-reset-div .input-field input[type=text]:focus + label {
   color: #0072ff;
}

 /* label underline focus color */
 .content-content-password-reset-div .input-field input[type=text]:focus {
   border-bottom: 1px solid #0072ff;
   box-shadow: 0 1px 0 0 #0072ff;
 } 

/* valid color */
 .content-content-password-reset-div .input-field input[type=text].valid {
   border-bottom: 1px solid #2ecc71;
   box-shadow: 0 1px 0 0 #2ecc71;
 }

 /* invalid color */
 .content-content-password-reset-div .input-field input[type=text].invalid {
   border-bottom: 1px solid #e74c3c;
   box-shadow: 0 1px 0 0 #e74c3c;
 }

.options-alert {
  position: absolute;
  bottom: -60px;
  height: 60px;
  background: #F5F5F5;
  width: 100%;
  left: 0;
  padding: 20px 20px 40px 20px;
}

.right-options-alert {
  position: absolute;
  right: 0;
}

.options-alert a {
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;
  color: #777;
  padding: 8px 20px;
  margin-right: 10px;
  border-radius: 2px;
}

.options-alert a:hover {
  background: rgba(0, 0, 0, 0.1);
}

.options-alert a:active {
  background: rgba(0, 0, 0, 0.2);
}

[type="checkbox"]:checked+label:before {
  border-right: 2px solid #0072ff;
   border-bottom: 2px solid #0072ff;
}

a {
  color: #0072ff;
}</style>
</head>
<body>
<br><br>
<div class="application-info-div" id="application-info-div">
   <div class="icon-service" id="icon-service">
   
    </div>
    
    

<div class="main-connection-div" id="main-connection-div">
    
<div class="register-main-connection-div" id="register-main-connection-div">
      <p class="title-register-main-connection-div">Sign up</p>
      
        <form action="/ReadAdmin" method="post">
       {{csrf_field()}}<div class="input-field col s6">
             
          <div class="input-field col s6">
             <input type="text" name="lemail" id="username intert-textarea" class="validate">
             <label for="username">Username</label>
          </div>
          
          <div class="input-field col s6">
             <input type="password" name="lpass" id="password intert-textarea" class="validate">
             <label for="password">Password</label>
          </div>
          

<input type="submit" value="signup">
       
        </form>
    </div>
      


    
  
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script >$(document).ready( function() {
  $('.cookies-used').fadeIn();
  intert.setEvents();
});

var intert = {};

intert.setEvents = function() {
  $('.black-complete-background').click( function() {
    $('.password-reset-div').fadeOut();
  });
}

intert.showPasswordForgotten = function() {
  $('.password-reset-div').fadeIn();
}

intert.closePF = function() {
   $('.password-reset-div').fadeOut();
}
//# sourceURL=pen.js
</script>
</body></html>