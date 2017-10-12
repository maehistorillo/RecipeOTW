  <div class="container">
  <div class="row">
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
                    <a href="login.php" style="font-size:12px;">Already have an account?</a>
                    <br />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-3">
                    <button type="submit"  class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign up</button>
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
                  <label for="birthdate" class="col-xs-3 control-label">Date of Birth: </label>
                  <div class="col-xs-3">
                    <input type="text" required class="form-control" id="birthdate" name="birthmonth" placeholder="Month" />
                </div>
                <div class="col-xs-3">
                    <input type="tel" required class="form-control" id="birthdate" name="birthdate" placeholder="Date" />
                </div>
                <div class="col-xs-3">
                    <input type="tel" required class="form-control" id="birthdate" name="birthyear" placeholder="Year" />
                    <br />
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