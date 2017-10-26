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
            <h3 class="panel-title" style="color: white;">Add address</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-12">
            <form class="form-horizontal" action="<?php echo base_url('Mainpage/signupAction2'); ?>" method="post" id="loginForm">
              <fieldset class="fieldset" style="padding-top: 10px;">
              
                  <div class="form-group">
                  <label for="fullname" class="col-xs-1" style="padding-left: 49px; color: #351E24;">Street Address: </label>
                  <div class="col-xs-10" style="padding-left: 80px;">
                    <input type="text" required maxlength="38" class="form-control" id="address" name="address" placeholder="Blk, lot, street number, unit, building, floor, etc." autocomplete="off" />
                  </div>
                </div>    
                
                <div class="form-group" style="padding-left: 8px;">
                  <label for="email" class="col-xs-2 control-label" style="color: #351E24;">City: </label>
                  <div class="col-xs-10" style="padding-left: 50px; padding-right: 38px;">
                    <input type="text" required class="form-control" maxlength="38" id="city" name="city" placeholder="City" autocomplete="off" pattern="[a-zA-Z0-9]+" />
                  </div>
                </div>
              
                <div class="form-group" style="padding-left: 30px; padding-top: 10px;">
                  <label for="email" class="col-xs-2 control-label" style="color: #351E24;">Region: </label>
                  <div class="col-xs-10" style="padding-left: 33px; padding-right: 38px;">
                    <input type="text" required class="form-control" maxlength="38" id="region" name="region" placeholder="Region" autocomplete="off" pattern="[a-zA-Z0-9]+" />
                  </div>
                </div>

                <div class="form-group" style="padding-left: 35px; padding-top: 10px;">
                  <label for="email" class="col-xs-2" style="color: #351E24;">Phone Number: </label>
                  <div class="col-xs-10" style="padding-left: 30px; padding-right: 38px;">
                    <input type="number" required class="form-control" maxlength="11" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" title="Must be numeric" pattern="[0-9]+" />
                  </div>
                </div>
                
                <div class="form-group" style="padding-left: 60px; padding-top: 0px; padding-bottom: 0px;">
                  <div class="col-md-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-default" style="background-color: #351E24; color: white;"> <i class="glyphicon glyphicon-plus"></i> Add Address</a></button>
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

  document.getElementById("city").addEventListener("input", forceLower);
function forceLower(evt) {
  var words = evt.target.value.split(/\s+/g);
  var newWords = words.map(function(element){
    element = element.toLowerCase();
    return element !== "" ?  element[0].toUpperCase() + element.substr(1, element.length) : "";
  });
  evt.target.value = newWords.join(" "); 
}

 document.getElementById("region").addEventListener("input", forceLower);
function forceLower(evt) {
  var words = evt.target.value.split(/\s+/g);
  var newWords = words.map(function(element){
    element = element.toLowerCase();
    return element !== "" ?  element[0].toUpperCase() + element.substr(1, element.length) : "";
  });
  evt.target.value = newWords.join(" "); 
}
 
 document.getElementById("phone").addEventListener("input", forceLower);
function forceLower(evt) {
  var words = evt.target.value.split(/\s+/g);
  var newWords = words.map(function(element){
    element = element.toLowerCase();
    return element !== "" ?  element[0].toUpperCase() + element.substr(1, element.length) : "";
  });
  evt.target.value = newWords.join(" "); 
}

</script>
