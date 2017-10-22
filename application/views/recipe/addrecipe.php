<div id="main" style="margin-left: 200px; padding-top: 50px;">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <h3>
        <b>Recipe On The Way</b>
      </h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Recipe</li>
      </ol>

  		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-plus"></i> Add Recipe</div>
			</div> <!-- /panel-heading -->
          <div class="panel-body">

            <form class="form-horizontal" action="<?php echo base_url('User/SubmitRecipe'); ?>" method="post" id="loginForm">
              <fieldset>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Recipe Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="recipename" name="recipename" placeholder="Name of Recipe" autocomplete="off" required/>
                  </div>
                </div>
                <div class="form-group">
	        	<label for="recipeImage" class="col-sm-2 control-label">Add Image: </label>
				    <div class="col-sm-10">
					    <!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    	<div class="kv-avatar center-block">					        
					        <input type="file" class="form-control" id="recipeImage" placeholder="Recipe Name" name="recipeimg" class="file-loading" style="width:auto;"/>
					    </div>  
				    </div>
	        	</div>    
                <div class="form-group">
                  <label for="category" class="col-sm-2 control-label">Category:</label>
                  <div class="col-sm-10">
                    <div class="checkbox-inline">
  						<label><input type="radio" name="recipecat" value="Main Dish">Main Dish</label>
					</div>
					<div class="checkbox-inline">
				  <label><input type="radio" name="recipecat" value="Appetizer">Appetizer</label>
					</div>
					<div class="checkbox-inline">
					  <label><input type="radio" name="recipecat" value="Dessert" >Dessert</label>
					</div>
					<div class="checkbox-inline">
				  <label><input type="radio" name="recipecat" value="Smoothies">Smoothies</label>
					</div>
					<div class="checkbox-inline">
				  <label><input type="radio" name="recipecat" value="Sweets">Sweets</label>
					</div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ingredients" class="col-sm-2 control-label">Ingredients:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ingredients" name="recipeing" placeholder="Ingredients" autocomplete="off" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="procedure" class="col-sm-2 control-label">Procedure:</label>
                  <div class="col-sm-10">
                    <textarea rows="3" required class="form-control" id="procedure" name="recipeprocedure" placeholder="How to prepare"></textarea>
                  </div>
                </div>
				<div class="form-group">
                  <label for="ingredients" class="col-sm-2 control-label">Price:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="recipecost" placeholder="Input Price" autocomplete="off" required/>
                  </div>
                </div>

                				<div class="div-action pull pull-right" style="padding-bottom:20px;">
				<a><button class="btn btn-default button1" value="submit" type="submit"> <i class="glyphicon glyphicon-plus-sign"></i> Add Recipe </button></a>
				</div> <!-- /div-action -->	
              </fieldset>
            </form>
			<form action="<?php echo base_url('Mainpage/Admin') ?>" method="post">
				<div class="div-action pull pull-left" style="padding-bottom:10px;">
				<a><button class="btn btn-default button1"> Back </button></a>
				</div>
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