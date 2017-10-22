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
        
    <table class="table-sort table-sort-search table-sort-show-search-count" id="manageRecipetable">
    <center>
	<thead>
      <tr>
        <th class="table-sort">Name</th>
        <th class="table-sort">Category</th>
        <th class="table-sort">Ingredients</th>
        <th>Image</th>
        <th>Cost</th>
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
		<center>
		<tbody
			<?php foreach($recipes as $row): ?>
			<tr>
				<td><?php echo $row['recipename']; ?></td>
				<td><?php echo $row['recipecat'];?></td>
				<td><?php echo $row['recipeing']; ?></td>
				<td><img src = "<?php echo base_url('image/'.$row['recipeimg'].''); ?>" class="image" style="width:128px;height:128px" /></td>
				<td><?php echo $row['recipecost'];?></td>
				<td><a href="">Edit</a> 
				<a href="<?php echo base_url('User/delRecipe/'.$row['recipename']); ?>">Delete</a></td>
			</tr>
			</tr>
			<?php endforeach; ?>
		</tbody>
		</center>
  </table>
        <!-- /table -->

      </div> <!-- /panel-body -->
    </div> <!-- /panel -->    
  </div>
