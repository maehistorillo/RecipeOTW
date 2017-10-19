<html>
<head>
	<div class="row">
		<div class="col-md-offset-1 col-md-10">

		<ol class="breadcrumb">
		  <li><a href="<?php echo base_url('Mainpage/Home')?>">Home</a></li>		  
		  <li class="active">Add to Cart</li>
		</ol>
</head>
<body>
			<form class="form-horizontal" action="<?php echo base_url('Mainpage/submitRecipe'); ?>" method="post" id="loginForm">
              <fieldset>
			  <?php foreach($)
			  <table>
				<tbody>
					<tr><td>Recipe Name: </td></tr>
					<tr><td></td></tr>
				</tbody>
			  </table>
			  
			  <div class="form-group">
                  <label for="ingredients" class="col-sm-2 control-label">Quantity:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="ingredients" name="recipequa" placeholder="Input the Quantity" autocomplete="off" required/>
                  </div>
                </div> 

						<div class="div-action pull pull-right" style="padding-bottom:20px;">
				<a><button class="btn btn-default button1"> <i class="glyphicon glyphicon-plus-sign"></i> Add to Cart </button></a>
				</div> <!-- /div-action -->	
              </fieldset>
            </form>

			<form action="<?php echo base_url('Mainpage/Admin') ?>" method="post">
				<div class="div-action pull pull-left" style="padding-bottom:10px;">
				<a><button class="btn btn-default button1"> Back </button></a>
				</div>
			</form>
</body>
</html>