<!DOCTYPE html>

<head>
<script src="../bootstrap/js/showhide.min.js"></script>
 <script>

    $(function() {
    $('#username,#email,#password,#cpassword,#firstname,#miname').on('keypress', function(e) {
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

    $(document).ready(function() {
    $('#firstname,#miname').on('keydown', function(event) {
        if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
           var $t = $(this);
           event.preventDefault();
           var char = String.fromCharCode(event.keyCode);
           $t.val(char + $t.val().slice(this.selectionEnd));
           this.setSelectionRange(1,1);
        }
    });
});

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
      
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
</div>
<section id="intro" class="intro" >
  <div class="container">
  <div class="row vertical">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Sign Up</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-5">
            <form class="form-horizontal" action="<?php echo base_url('Mainpage/signupAction'); ?>" method="post" id="loginForm">
              <fieldset class="fieldset">
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Username: </label>
                  <div class="col-xs-9">
                    <input type="text" required minlength="5" maxlength="15" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" pattern="[a-zA-Z0-9]+" title="Must be at least 5 characters, and may contain at lease one letter" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-xs-3 control-label">Email: </label>
                  <div class="col-xs-9">
                    <input type="text" required class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be characters@characters.domain"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-xs-3 control-label">Password: </label>
                  <div class="col-xs-9">
                    <input type="password" required maxlength="15" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and uppercase letter, and can be 8-15 characters" />
                    <input type="checkbox" id="showHide" />
                    <label for="showHide" id="showHideLabel">Show Password</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpassword" class="col-xs-3 control-label">Confirm Password: </label>
                  <div class="col-xs-9">
                    <input type="password" required class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off" oninput="check(this)" /> <span id='message'></span>
                  </div>
                </div>
                
              </div> 
            </fieldset>
                <div class="col-md-7">     
                <div class="form-group">
                  <label for="fullname" class="col-xs-2 control-label">Full Name: </label>
                  <div class="col-xs-4">
                    <input type="text" required class="form-control" id="surname" name="surname" placeholder="Surname" autocomplete="off" />
                  </div>
                  <div class="col-xs-4">
                    <input type="text" required class="form-control" id="firstname" name="firstname" placeholder="Firstname" autocomplete="off" />
                  </div>
                  <div class="col-xs-2">
                    <input type="text" required maxlength="1" class="form-control" id="miname" name="miname" placeholder="M.I" autocomplete="off" />
                    <br />
                  </div>
                </div>
                <div class="form-group">
                    <label for="birthdate" class="col-sm-3 control-label">Date of Birth:</label>
                    <div class="col-sm-4">
                        <input class="form-control datepicker" required id="birthdate" name="birthdate" type="date"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-8 control-label" for="address">Address: </label>
                    <div class="col-xs-7">
                    <textarea rows="3" required class="form-control" id="address" name="address" placeholder="Address" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-0 col-xs-10">
                    <a href="<?php echo base_url('/Mainpage/Login'); ?>"><br />Already have an account?<br /></a>
                    <br />
                  </div>
                </div>
                </div>    
                <div class="form-group">
                  <div class="col-md-offset-4 col-sm-4">
                    <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign up</a></button>
                </div>
                  </div>            
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

</script>
</body>
</html>