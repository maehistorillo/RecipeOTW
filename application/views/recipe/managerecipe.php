<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/tablesort.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/sortstyles.css');?>">

<div id="main" style="margin-left: 200px; padding-top: 50px;">
  <div class="content-wrapper">

      <h3>
        <b>Recipe On The Way</b>
      </h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Recipe</li>
      </ol>

      <div class="panel panel-default">
      <div class="panel-heading">
        <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Recipe</div>
      </div> <!-- /panel-heading -->
      <div class="panel-body">   
        
    <table class="table-sort table-sort-search table-sort-show-search-count" id="manageRecipetable" style="width: fixed ;overflow-x:scroll;"> 
    <center>
	<thead>
      <tr>
        <th class="table-sort"><center>Name</center></th>
        <th class="table-sort"><center>Category</center></th>
        <th class="table-sort"><center>Ingredients</center></th>
        <th><center>Image</center></th>
        <th><center>Cost</center></th>
		<th>Action</th>
      </tr>
    </thead>
	</center>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script> 
<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('bootstrap/js/tablesort.js');?>"></script> 
<script type="text/javascript">
            // For Demo Purposes
            $(function () {
                $('table.table-sort').tablesort();
                hljs.initHighlightingOnLoad(); // Syntax Hilighting
            });
        </script>
		
		<tbody
			<?php foreach($recipes as $row): ?>
			<tr >
				<td><center><?php echo $row['recipename']; ?></center></td>
				<td><center><?php echo $row['recipecat'];?></center></td>
				<td><center><?php echo $row['recipeing']; ?></center></td>
				<td><center><img src = "<?php echo base_url('image/'.$row['recipeimg'].''); ?>" class="image" style="width:128px;height:128px" /></center></td>
				<td><center><?php echo $row['recipecost'];?></center></td>
				<td><center> 
				<a href="<?php echo base_url('User/delRecipe/'.$row['recipename']); ?>">Delete</a></center></td>
			</tr>
			
			<?php endforeach; ?>
		</tbody>
		
  </table>
        <!-- /table -->

      </div> <!-- /panel-body -->
    </div> <!-- /panel -->    
  </div>
