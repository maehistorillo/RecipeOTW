<script>

    $(function() {
    $('#email,#password').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});
</script>

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

<section id="intro" class="intro" style="padding-top: 140px;">
<div class="container">
    <div class="row vertical">

      <div class="col-md-6 col-md-offset-3" style="padding-left: 60px;">
        <div class="panel panel-info">
          <div class="panel-heading" style="background-color: #351E24;">
 
            <h3 class="panel-title" style="color: white;">Please Sign in</h3>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" action="<?php echo base_url('Mainpage/loginAction'); ?>" method="post" id="loginForm">
              <fieldset style="padding-top: 10px;">
             
              <div class="form-group" style="padding-left: 18px;">
                  <label for="email" class="col-xs-2 control-label" style="color: #351E24;">Email: </label>
                  <div class="col-xs-9" style="padding-left: 42px; padding-right: 16px;">
                    <input type="text" required class="form-control" maxlength="40" id="email" name="email" placeholder="Enter email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be characters@characters.domain"/>
              </div>
                </div>
               <div class="form-group" style="padding-left: 30px;">
                  <label for="password" class="col-xs-1 control-label" style="color: #351E24;">Password: </label>
                  <div class="col-xs-10" style="padding-left: 72px; padding-right: 17px;">
                    <input type="password" required minlength="8" maxlength="40" class="form-control" id="password" name="password" placeholder="Type your password" autocomplete="off" pattern="(?=.*\d)[a-zA-Z0-9]+" title="Must contain at least one number and can be 8 (min) characters long" /> 
                    <a href="<?php echo base_url('Mainpage/Forgotpass/')?>"><h6 style="font-size:10px; color: #351E24; padding-top: 5px; padding-bottom: 0px; padding-left: 10px;">Forgot Password?</h6></a>
                    </div>
                
                  <div class="col-sm-offset-4 col-xs-12" style="padding-left: 12px; padding-top: 0px; color: black;">Create an account?
                    <a href="<?php echo base_url('Mainpage/Signup/'); ?>"><h6 style="color: #351E24; font-size: 10px; padding-bottom: 0px; padding-left: 25px; font-size: 15px;">Sign up</h6></a>
                  </div>
                  </div>

                  <div class="col-md-offset-3 col-sm-5" style="padding-left: 63px; padding-top: 0px;">
                    <button type="submit" class="btn btn-default" style="background-color: #351E24; color: white;"> <i class="glyphicon glyphicon-log-in"></i> Sign in</a></button>
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
