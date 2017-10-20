<script>

    $(function() {
    $('#email,#password').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});
</script>

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
 
            <h3 class="panel-title" style="color: white;">Enter your Email</h3>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" action="<?php echo base_url('Mainpage'); ?>" method="post" id="loginForm">
              <fieldset style="padding-top: 10px;">
             
             <div class="form-group" style="padding-left: 30px;">
                  <label for="password" class="col-xs-1 control-label" style="color: #351E24;">Email: </label>
                  <div class="col-xs-10" style="padding-left: 72px; padding-right: 17px;">
                    <input type="Email" required minlength="8" maxlength="40" class="form-control" id="password" name="password" placeholder="Enter email" autocomplete="off" /> 
                    <fieldset style="padding-top: 10px;">
					<h6>Your password will redirect to inbox</h6>
					</div>
                </div>

                <div class="form-group" style="padding-left: 50px; padding-top: 0px;">
                  <div class="col-md-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-default" style="background-color: #351E24; color: white;"> <i class="glyphicon glyphicon-log-in"></i> Send</a></button>
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
