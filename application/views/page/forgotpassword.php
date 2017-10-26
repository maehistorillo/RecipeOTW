
<script src="../bootstrap/js/showhide.min.js"></script>
 <script>

    $(function() {
    $('#email').on('keypress', function(e) {
        if (e.which == 32)
            return false;
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
            <h3 class="panel-title" style="color: white;">Verify your email</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-12">
            <form class="form-horizontal" action="<?php echo base_url('Mainpage/signupAction'); ?>" method="post" id="loginForm">
              <fieldset class="fieldset" style="padding-top: 10px;">
                <div class="form-group" style="padding-left: 18px;">
                  <label for="email" class="col-xs-2 control-label" style="color: #351E24;">Email: </label>
                  <div class="col-xs-9" style="padding-left: 42px; padding-right: 16px;">
                    <input type="text" required class="form-control" maxlength="38" id="email" name="email" placeholder="Enter email address" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Must be characters@characters.domain"/>
                    <label style="color: #351E24; padding-left: 10px;">Password will redirect to your inbox.</label>
                  </div>
                </div>
                <p style="font-size: 13px; padding-left: 115px; color: black;">You will be redirected on Login page in <span id="counter">120</span> second(s).</p>

                <div class="form-group" style="padding-left: 60px; padding-top: 0px;">
                  <div class="col-md-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-default" style="background-color: #351E24; color: white;"> <i class="glyphicon glyphicon-log-in"></i> Send</button>
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
</div>
 </section>
</body>
<script>


function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);


</script>
