<div class="row">
		<div class="col-md-offset-1 col-md-10">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Recipe</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-plus"></i> Add Recipe</div>
			</div> <!-- /panel-heading -->
          <div class="panel-body">

            <form class="form-horizontal" action="<?php echo base_url('Mainpage/addRecipeAction'); ?>" method="post" id="loginForm">
              <fieldset>
                <div class="form-group">
                  <label for="recipeName" class="col-sm-2 control-label">Recipe Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="recipeName" name="recipeName" placeholder="Name of Recipe" autocomplete="off" required/>
                  </div>
                </div>
                <div class="form-group">
	        	<label for="recipeImage" class="col-sm-2 control-label">Recipe Image: </label>
				    <div class="col-sm-10">
					    <!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    	<div class="kv-avatar center-block">					        
					        <input type="file" class="form-control" id="recipeImage" placeholder="Recipe Name" name="recipeImage" class="file-loading" style="width:auto;"/>
					    </div>  
				    </div>
	        	</div>    
                <div class="form-group">
                  <label for="category" class="col-sm-2 control-label">Recipe Category:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline">
  						<label><input type="checkbox" value="" required>Desserts</label>
					</div>
					<div class="checkbox-inline">
				  <label><input type="checkbox" value="">Smoothies</label>
					</div>
					<div class="checkbox-inline">
					  <label><input type="checkbox" value="" > Side Dish</label>
					</div>
					<div class="checkbox-inline">
				  <label><input type="checkbox" value="">Dish</label>
					</div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ingredients" class="col-sm-2 control-label">Recipe Ingredients:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Ingredients" autocomplete="off" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="procedure" class="col-sm-2 control-label">Recipe Procedure:</label>
                  <div class="col-sm-10">
                    <textarea rows="3" required class="form-control" id="procedure" name="procedure" placeholder="How to prepare"></textarea>
                  </div>
                </div>

                				<div class="div-action pull pull-right" style="padding-bottom:20px;">
				<a><button class="btn btn-default button1"> <i class="glyphicon glyphicon-plus-sign"></i> Add Recipe </button></a>
				</div> <!-- /div-action -->	
              </fieldset>
            </form>
          </div>
          <!-- panel-body -->
        </div>
        <!-- /panel -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<script src="custom/js/categories.js"></script>