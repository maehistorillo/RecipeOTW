
<script src="../bootstrap/js/showhide.min.js"></script>
 <script>

    $(function() {
    $('#email,#password,#cpassword').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});

    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must Match');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }


    function swapInput(tag, type) {
  var el = document.createElement('input');
  el.id = tag.id;
  el.type = type;
  el.name = tag.name;
  el.value = tag.value; 
  tag.parentNode.insertBefore(el, tag);
  tag.parentNode.removeChild(tag);
}

function toggle_password(target){
    var d = document;
    var tag = d.getElementById(target);
    var tag2 = d.getElementById("showhide");

    if (tag2.innerHTML == 'Show'){

        swapInput(tag, 'text');
        tag2.innerHTML = 'Hide';

    } else {
        swapInput(tag, 'password');   
        tag2.innerHTML = 'Show';
    }
}

$(document).ready(function() {
  $("#showHide").click(function() {
    if ($("#password").attr("type") == "password") {
      $("#password").attr("type", "text");

    } else {
      $("#password").attr("type", "password");
    }
  });
});


</script>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                
        <a class="navbar-brand" href="<?php echo base_url('Mainpage/Home');?>">
        <h1>ROTW</h1>
        </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <a class="pull-right" href="<?php echo base_url('Mainpage/Home');?>">
            <h3 style="color: white;">HOME</h3></a>
          </a>
      
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>      


<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>
<section id="intro" class="intro" style="padding-top: 140px; padding-left: 15px;">
  <div class="container">
  <div class="row vertical">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color: #351E24;">
            <h3 class="panel-title" style="color: white;">Please Sign Up</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-12">
            <form class="form-horizontal" action="<?php echo base_url('Mainpage/signupAction'); ?>" method="post" id="loginForm">
              <fieldset class="fieldset" style="padding-top: 10px;">
                
                  <div class="form-group">
                  <label for="fullname" class="col-xs-3 control-label" style="color: #351E24;">Full Name: </label>
                  <div class="col-xs-4">
                    <input type="text" required maxlength="19" class="form-control" id="surname" name="surname" placeholder="Surname" autocomplete="off" pattern="[a-zA-Z]+"  title="Must not contain number/s" />
                  </div>
                  <div class="col-xs-4">
                    <input type="text" required maxlength="19" class="form-control" id="firstname" name="firstname" placeholder="Firstname" autocomplete="off" pattern="[a-zA-Z]+" title="Must not contain number/s" />
                  </div>
                </div>    
                <div class="form-group" style="padding-left: 18px;">
                  <label for="email" class="col-xs-2 control-label" style="color: #351E24;">Email: </label>
                  <div class="col-xs-9" style="padding-left: 42px; padding-right: 16px;">
                    <input type="text" required class="form-control" maxlength="38" id="email" name="email" placeholder="Email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be characters@characters.domain"/>
                  </div>
                </div>
                <div class="form-group" style="padding-left: 34px;">
                  <label for="password" class="col-xs-1 control-label" style="color: #351E24;">Password: </label>
                  <div class="col-xs-10" style="padding-left: 70px; padding-right: 18px;">
                    <input type="password" required minlength="8" maxlength="38" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" pattern="(?=.*\d)[a-zA-Z0-9]+" title="Must contain at least one number and can be 8 (min) characters long" />
                    <input type="checkbox" id="showHide" />
                    <label for="showHide" id="showHideLabel" style="color: #351E24;">Show Password</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpassword" class="col-xs-1" style="padding-left: 49px; color: #351E24;">Confirm Password: </label>
                  <div class="col-xs-10" style="padding-left: 80px; padding-right: 35px;">
                    <input type="password" required minlength="8" maxlength="40" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off" oninput="check(this)" /> <span id='message'></span>
                  </div>
                </div>
              
                
                <div class="form-group">
                  <div class="col-sm-offset-4 col-xs-10" style="padding-left: 22px;">Already have an account?
                    <a href="<?php echo base_url('/Mainpage/Login'); ?>"><h6 style="color: #351E24; font-size: 10px; padding-left: 10px; padding-bottom: 0px; font-size: 15px; padding-left: 45px;">Sign in</h6></a>
                    
                  </div>
                </div>
              
                <div class="form-group" style="padding-left: 60px; padding-top: 0px;">
                  <div class="col-md-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-default" style="background-color: #351E24; color: white;"> <i class="glyphicon glyphicon-log-in"></i> Sign up</a></button>
                </div>
                  </div>          
                  </fieldset>  
            </form>
          </div>
          <!-- panel-body -->
        </div>
        <!-- /panel -->
      </div>
      <!-- /col-md-3 -->
    </div>
    <!-- /row -->
  </div>
 </body>
</div>
</section>
<script>

  document.getElementById("surname").addEventListener("input", forceLower);
function forceLower(evt) {
  var words = evt.target.value.split(/\s+/g);
  var newWords = words.map(function(element){
    element = element.toLowerCase();
    return element !== "" ?  element[0].toUpperCase() + element.substr(1, element.length) : "";
  });
  evt.target.value = newWords.join(" "); 
}

 document.getElementById("firstname").addEventListener("input", forceLower);
function forceLower(evt) {
  var words = evt.target.value.split(/\s+/g);
  var newWords = words.map(function(element){
    element = element.toLowerCase();
    return element !== "" ?  element[0].toUpperCase() + element.substr(1, element.length) : "";
  });
  evt.target.value = newWords.join(" "); 
}
 
</script>
