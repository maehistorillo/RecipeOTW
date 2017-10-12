<?php
// Include config file
require_once 'config.php';
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(strlen(trim($_POST['username'])) < 4){
        $username_err = "Username must have atleast 4 characters.";
    } 
    else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: mainpage.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<head>
  <!--  jQuery -->
<script type="text/javascript" src="../bootstrap/js/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="../bootstrap/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-datepicker3.css" />

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
  <div class="container">
      <div class="row">
        <div class="page-header">
        <h1>Registration</h1>
      </div>
        
          <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
          <div class="form-group">
          <label for="firstName" class="col-sm-2 control-label">First Name:</label>
          <div class="col-sm-4">
              <input type="text" required name="firstName" class="form-control" id="firstName" placeholder="First Name">
            </div>
          </div>
          
          <div class="form-group">
          <label for="lastName" class="col-sm-2 control-label">Last Name:</label>
          <div class="col-sm-4">
              <input type="text" required name="lastName" class="form-control" id="lastName" placeholder="Last Name">
            </div>
          </div>
          
          
           <div class="form-group">
             <label for="" class="col-sm-2 control-label">Gender:</label> 
           <div class="col-sm-4">
             <label class="radio-inline">
          <input type="radio" required name="gender" id="gender1" value="male">Male
       </label>
      <label class="radio-inline">
          <input type="radio" required name="gender" id="gender2" value="female">Female
      </label>
      
           </div>
        </div>
          
          <div class="form-group">
          <label for="dob" class="col-sm-2 control-label">Date of Birth:</label>
          <div class="col-sm-4">
              <input class="form-control datepicker" required id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
          </div>
          </div>
          
          <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <label for="username" class="col-sm-2 control-label">Username:</label>
          <div class="col-sm-4">
              <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Username">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
          </div>
  
         <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
             <label for="passwd" class="col-sm-2 control-label">Password:</label>
           <div class="col-sm-4">
           <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Password">
           <span class="help-block"><?php echo $password_err; ?></span>
           </div>
         </div>

         <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
             <label for="password" class="col-sm-2 control-label">Confirm Password:</label>
              <div class="col-sm-4">
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" 
                placeholder="Re-type Password">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
              </div>
         </div>
         
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-2">
            <button type="submit" class="btn btn-primary" id="register">Register</button>
          </div>
       </div>
  
     </form>
         
      </div><!-- end for class "row" -->
   </div><!-- end for class "container" -->


</body>
