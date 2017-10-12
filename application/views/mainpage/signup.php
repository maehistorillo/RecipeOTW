<!-- Preloader -->
<head>
<div id="preloader">
    <div id="load"></div>
  </div>
  
  <script src="<?php echo base_url('bootstrap/js/recipe.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery-1.11.3.min.js'); ?>"></script>
	
	<script src="<?php echo base_url('bootstrap/js/custom.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap-datepicker.min.js'); ?>"></script>
  
  
 <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</head>

<body>
<section id="intro" class="intro" >
  <div class="container">
  <div class="row vertical">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Sign Up</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-6">
            <form class="form-horizontal" action="<?php echo base_url('Mainpage/signupAction'); ?>" method="post" id="loginForm">
              <fieldset class="fieldset">
                <div class="form-group">
                  <label for="username" class="col-xs-3 control-label">Username: </label>
                  <div class="col-xs-9">
                    <input type="text" required class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-xs-3 control-label">Email: </label>
                  <div class="col-xs-9">
                    <input type="text" required class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-xs-3 control-label">Password: </label>
                  <div class="col-xs-9">
                    <input type="password" required class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="cpassword" class="col-xs-3 control-label">Confirm Password: </label>
                  <div class="col-xs-9">
                    <input type="password" required class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off" />
                  </div>
                </div>
                 <div class="form-group">
                  <div class="col-xs-offset-3 col-xs-10">
                    <a href="<?php echo base_url('/Mainpage/Login'); ?>">Already have an account?</a>
                    <br />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-3">
                    <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign up</button>
                </div>
                  </div>
              </div> 
            </fieldset>
                <div class="col-md-6">     
                <div class="form-group">
                  <label for="fullname" class="col-xs-3 control-label">Full Name: </label>
                  <div class="col-xs-3">
                    <input type="text" required class="form-control" id="surname" name="surname" placeholder="Surname" autocomplete="off" />
                  </div>
                  <div class="col-xs-3">
                    <input type="text" required class="form-control" id="firstname" name="firstname" placeholder="Firstname" autocomplete="off" />
                  </div>
                  <div class="col-xs-3">
                    <input type="text" required class="form-control" id="miname" name="miname" placeholder="M.I" autocomplete="off" />
                    <br />
                  </div>
                </div>
                <div class="form-group">
          <label for="dob" class="col-sm-2 control-label">Date of Birth:</label>
          <div class="col-sm-4">
              <input class="form-control datepicker" required id="birthdate" name="birthdate" placeholder="MM/DD/YYY" type="text"/>
          </div>
          </div>
                <div class="form-group">
                <label class="col-xs-3 control-label" for="address">Address: </label>
                <div class="col-xs-9">
                <textarea rows="3" required class="form-control" id="address" name="address" placeholder="Address"></textarea>
                </div>
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
