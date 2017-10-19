
<script src="../bootstrap/js/showhide.min.js"></script>
 <script>

    $(function() {
    $('#email,#password,#cpassword,#firstname,#miname').on('keypress', function(e) {
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
                <!--
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Username: </label>
                  <div class="col-xs-9">
                    <input type="text" required minlength="5" maxlength="30" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" pattern="[a-zA-Z0-9]+" title="Must be at least 5 characters, and may contain at lease one letter" />
                  </div>
                </div>
                -->

                  <div class="form-group">
                  <label for="fullname" class="col-xs-3 control-label" style="color: #351E24;">Full Name: </label>
                  <div class="col-xs-4">
                    <input type="text" required maxlength="19" class="form-control" id="surname" name="surname" placeholder="Surname" autocomplete="off" />
                  </div>
                  <div class="col-xs-4">
                    <input type="text" required maxlength="19" class="form-control" id="firstname" name="firstname" placeholder="Firstname" autocomplete="off" />
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
              
                <!--
                  <div class="col-xs-2">
                    <input type="text" required maxlength="1" class="form-control" id="miname" name="miname" placeholder="M.I" autocomplete="off" />
                    </div>
                </div>
                  -->
                <!--
                <div class="form-group">
                    <label for="birthdate" class="col-sm-3 control-label">Date of Birth:</label>
                    <div class="col-sm-5">
                        <input class="form-control datepicker" required id="birthdate" name="birthdate" type="date"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-8 control-label" for="address">Address: </label>
                    <div class="col-xs-7">
                    <textarea rows="3" required class="form-control" id="address" name="address" placeholder="Address" ></textarea>
                    </div>
                </div>
                -->
                <div class="form-group">
                  <div class="col-sm-offset-4 col-xs-10" style="padding-left: 0px;">
                    <a href="<?php echo base_url('/Mainpage/Login'); ?>"><h6 style="color: #351E24; font-size: 10px; padding-left: 10px; padding-bottom: 0px;">Already have an account?</h6></a>
                    
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
 document.getElementById("address").addEventListener("input", forceLower);
function forceLower(evt) {
  var words = evt.target.value.split(/\s+/g);
  var newWords = words.map(function(element){
    element = element.toLowerCase();
    return element !== "" ?  element[0].toUpperCase() + element.substr(1, element.length) : "";
  });
  evt.target.value = newWords.join(" "); 
}

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
