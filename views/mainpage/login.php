<!-- Preloader -->
<div id="preloader">
    <div id="load"></div>
  </div>

<section id="intro" class="intro">
<div class="container">
    <div class="row vertical">

      <div class="col-md-5 col-md-offset-4">
        <div class="panel panel-info">
          <div class="panel-heading">
 
            <h3 class="panel-title">Please Sign in</h3>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" action="<?php echo base_url('Mainpage/loginAction'); ?>" method="post" id="loginForm">
              <fieldset>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10 pull-left">
                    <a href="#" style="font-size:14px;" >Forgot Password? |</a>
                    <a href="<?php echo base_url('/Mainpage/Signup'); ?>" style="font-size:14px;">Create an account?</a>
                  </div>
                  <div class="col-sm-offset-2 col-sm-10">
                    <a href="<?php echo base_url('/Mainpage/AdminLogin'); ?>" style="font-size:14px;">Log-in as Admin</a>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign in</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <!-- panel-body -->
        </div>
        <!-- /panel -->
      </div>
      <!-- /col-md-4 -->
    </div>
    <!-- /row -->
  </div>
  <!-- container -->  
</div>
</section>