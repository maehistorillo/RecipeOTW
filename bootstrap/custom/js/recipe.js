var manageTable;

$(document).ready(function() {
	// top nav bar 
	$('#navRecipe').addClass('active');
	// manage recipe data table
	manageRecipeTable = $('#manageRecipeTable').DataTable({
		'ajax': 'php_action/fetchRecipe.php',
		'order': []
	});

	// add recipe modal btn clicked
	$("#addRecipeModalBtn").unbind('click').bind('click', function() {
		// // recipe form reset
		$("#submitRecipeForm")[0].reset();		

		// remove text-error 
		$(".text-danger").remove();
		// remove from-group error
		$(".form-group").removeClass('has-error').removeClass('has-success');

		$("#recipeImage").fileinput({
	      overwriteInitial: true,
		    maxFileSize: 2500,
		    showClose: false,
		    showCaption: false,
		    browseLabel: '',
		    removeLabel: '',
		    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
		    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
		    removeTitle: 'Cancel or reset changes',
		    elErrorContainer: '#kv-avatar-errors-1',
		    msgErrorClass: 'alert alert-block alert-danger',
		    defaultPreviewContent: '<img src="assests/images/photo_default.png" alt="Profile Image" style="width:100%;">',
		    layoutTemplates: {main2: '{preview} {remove} {browse}'},								    
	  		allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"]
			});   

		// submit recipe form
		$("#submitRecipeForm").unbind('submit').bind('submit', function() {

			// form validation
			var recipeImage = $("#recipeImage").val();
			var recipeName = $("#recipeName").val();
			var quantity = $("#quantity").val();
			var rate = $("#rate").val();
	
			if(recipeImage == "") {
				$("#recipeImage").closest('.center-block').after('<p class="text-danger">Recipe Image field is required</p>');
				$('#recipeImage').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#recipeImage").find('.text-danger').remove();
				// success out for form 
				$("#recipeImage").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(recipeName == "") {
				$("#recipeName").after('<p class="text-danger">Recipe Name field is required</p>');
				$('#recipeName').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#recipeName").find('.text-danger').remove();
				// success out for form 
				$("#recipeName").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(quantity == "") {
				$("#quantity").after('<p class="text-danger">Quantity field is required</p>');
				$('#quantity').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#quantity").find('.text-danger').remove();
				// success out for form 
				$("#quantity").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(rate == "") {
				$("#rate").after('<p class="text-danger">Rate field is required</p>');
				$('#rate').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#rate").find('.text-danger').remove();
				// success out for form 
				$("#rate").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(brandName == "") {
				$("#brandName").after('<p class="text-danger">Brand Name field is required</p>');
				$('#brandName').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#brandName").find('.text-danger').remove();
				// success out for form 
				$("#brandName").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(categoriesName == "") {
				$("#categoriesName").after('<p class="text-danger">Category Name field is required</p>');
				$('#categoriesName').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#categoriesName").find('.text-danger').remove();
				// success out for form 
				$("#categoriesName").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(recipeStatus == "") {
				$("#recipeStatus").after('<p class="text-danger">Recipe Status field is required</p>');
				$('#recipeStatus').closest('.form-group').addClass('has-error');
			}	else {
				// remov error text field
				$("#recipeStatus").find('.text-danger').remove();
				// success out for form 
				$("#recipeStatus").closest('.form-group').addClass('has-success');	  	
			}	// /else

			if(recipeImage && recipeName && quantity && rate && brandName && categoriesName && recipeStatus) {
				// submit loading button
				$("#createRecipeBtn").button('loading');

				var form = $(this);
				var formData = new FormData(this);

				$.ajax({
					url : form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json',
					cache: false,
					contentType: false,
					processData: false,
					success:function(response) {

						if(response.success == true) {
							// submit loading button
							$("#createRecipeBtn").button('reset');
							
							$("#submitRecipeForm")[0].reset();

							$("html, body, div.modal, div.modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
																	
							// shows a successful message after operation
							$('#add-recipe-messages').html('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
		          '</div>');

							// remove the mesages
		          $(".alert-success").delay(500).show(10, function() {
								$(this).delay(3000).hide(10, function() {
									$(this).remove();
								});
							}); // /.alert

		          // reload the manage student table
							manageRecipeTable.ajax.reload(null, true);

							// remove text-error 
							$(".text-danger").remove();
							// remove from-group error
							$(".form-group").removeClass('has-error').removeClass('has-success');

						} // /if response.success
						
					} // /success function
				}); // /ajax function
			}	 // /if validation is ok 					

			return false;
		}); // /submit recipe form

	}); // /add recipe modal btn clicked
	

	// remove recipe 	

}); // document.ready fucntion

function editRecipe(recipeId = null) {

	if(recipeId) {
		$("#recipeId").remove();		
		// remove text-error 
		$(".text-danger").remove();
		// remove from-group error
		$(".form-group").removeClass('has-error').removeClass('has-success');
		// modal spinner
		$('.div-loading').removeClass('div-hide');
		// modal div
		$('.div-result').addClass('div-hide');

		$.ajax({
			url: 'php_action/fetchSelectedRecipe.php',
			type: 'post',
			data: {recipeId: recipeId},
			dataType: 'json',
			success:function(response) {		
			// alert(response.recipe_image);
				// modal spinner
				$('.div-loading').addClass('div-hide');
				// modal div
				$('.div-result').removeClass('div-hide');				

				$("#getRecipeImage").attr('src', 'stock/'+response.recipe_image);

				$("#editRecipeImage").fileinput({		      
				});  

				// $("#editRecipeImage").fileinput({
		  //     overwriteInitial: true,
			 //    maxFileSize: 2500,
			 //    showClose: false,
			 //    showCaption: false,
			 //    browseLabel: '',
			 //    removeLabel: '',
			 //    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
			 //    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
			 //    removeTitle: 'Cancel or reset changes',
			 //    elErrorContainer: '#kv-avatar-errors-1',
			 //    msgErrorClass: 'alert alert-block alert-danger',
			 //    defaultPreviewContent: '<img src="stock/'+response.recipe_image+'" alt="Profile Image" style="width:100%;">',
			 //    layoutTemplates: {main2: '{preview} {remove} {browse}'},								    
		  // 		allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"]
				// });  

				// recipe id 
				$(".editRecipeFooter").append('<input type="hidden" name="recipeId" id="recipeId" value="'+response.recipe_id+'" />');				
				$(".editRecipePhotoFooter").append('<input type="hidden" name="recipeId" id="recipeId" value="'+response.recipe_id+'" />');				
				
				// recipe name
				$("#editRecipeName").val(response.recipe_name);
				// quantity
				//$("#editQuantity").val(response.quantity);
				// rate
				//$("#editRate").val(response.rate);
				// brand name
				$("#editBrandName").val(response.brand_id);
				// categories name
				$("#editCategoriesName").val(response.categories_id);
				// status
				$("#editRecipeStatus").val(response.active);

				// update the recipe data function
				$("#editRecipeForm").unbind('submit').bind('submit', function() {

					// form validation
					var recipeImage = $("#editRecipeImage").val();
					var recipeName = $("#editRecipeName").val();
					var quantity = $("#editQuantity").val();
					var rate = $("#editRate").val();
					var brandName = $("#editBrandName").val();
					var categoriesName = $("#editCategoryName").val();
					var recipeStatus = $("#editRecipeStatus").val();
								

					if(recipeName == "") {
						$("#editRecipeName").after('<p class="text-danger">Recipe Name field is required</p>');
						$('#editRecipeName').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editRecipeName").find('.text-danger').remove();
						// success out for form 
						$("#editRecipeName").closest('.form-group').addClass('has-success');	  	
					}	// /else

					if(quantity == "") {
						$("#editQuantity").after('<p class="text-danger">Quantity field is required</p>');
						$('#editQuantity').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editQuantity").find('.text-danger').remove();
						// success out for form 
						$("#editQuantity").closest('.form-group').addClass('has-success');	  	
					}	// /else

					if(rate == "") {
						$("#editRate").after('<p class="text-danger">Rate field is required</p>');
						$('#editRate').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editRate").find('.text-danger').remove();
						// success out for form 
						$("#editRate").closest('.form-group').addClass('has-success');	  	
					}	// /else

					if(brandName == "") {
						$("#editBrandName").after('<p class="text-danger">Brand Name field is required</p>');
						$('#editBrandName').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editBrandName").find('.text-danger').remove();
						// success out for form 
						$("#editBrandName").closest('.form-group').addClass('has-success');	  	
					}	// /else

					if(categoriesName == "") {
						$("#editCategoryName").after('<p class="text-danger">Category Name field is required</p>');
						$('#editCategoryName').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editCategoryName").find('.text-danger').remove();
						// success out for form 
						$("#editCategoryName").closest('.form-group').addClass('has-success');	  	
					}	// /else

					if(recipeStatus == "") {
						$("#editRecipeStatus").after('<p class="text-danger">Recipe Status field is required</p>');
						$('#editRecipeStatus').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editRecipeStatus").find('.text-danger').remove();
						// success out for form 
						$("#editRecipeStatus").closest('.form-group').addClass('has-success');	  	
					}	// /else					

					if(recipeName && quantity && rate && brandName && categoriesName && recipeStatus) {
						// submit loading button
						$("#editRecipeBtn").button('loading');

						var form = $(this);
						var formData = new FormData(this);

						$.ajax({
							url : form.attr('action'),
							type: form.attr('method'),
							data: formData,
							dataType: 'json',
							cache: false,
							contentType: false,
							processData: false,
							success:function(response) {
								console.log(response);
								if(response.success == true) {
									// submit loading button
									$("#editRecipeBtn").button('reset');																		

									$("html, body, div.modal, div.modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
																			
									// shows a successful message after operation
									$('#edit-recipe-messages').html('<div class="alert alert-success">'+
				            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
				            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
				          '</div>');

									// remove the mesages
				          $(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									}); // /.alert

				          // reload the manage student table
									manageRecipeTable.ajax.reload(null, true);

									// remove text-error 
									$(".text-danger").remove();
									// remove from-group error
									$(".form-group").removeClass('has-error').removeClass('has-success');

								} // /if response.success
								
							} // /success function
						}); // /ajax function
					}	 // /if validation is ok 					

					return false;
				}); // update the recipe data function

				// update the recipe image				
				$("#updateRecipeImageForm").unbind('submit').bind('submit', function() {					
					// form validation
					var recipeImage = $("#editRecipeImage").val();					
					
					if(recipeImage == "") {
						$("#editRecipeImage").closest('.center-block').after('<p class="text-danger">Recipe Image field is required</p>');
						$('#editRecipeImage').closest('.form-group').addClass('has-error');
					}	else {
						// remov error text field
						$("#editRecipeImage").find('.text-danger').remove();
						// success out for form 
						$("#editRecipeImage").closest('.form-group').addClass('has-success');	  	
					}	// /else

					if(recipeImage) {
						// submit loading button
						$("#editRecipeImageBtn").button('loading');

						var form = $(this);
						var formData = new FormData(this);

						$.ajax({
							url : form.attr('action'),
							type: form.attr('method'),
							data: formData,
							dataType: 'json',
							cache: false,
							contentType: false,
							processData: false,
							success:function(response) {
								
								if(response.success == true) {
									// submit loading button
									$("#editRecipeImageBtn").button('reset');																		

									$("html, body, div.modal, div.modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
																			
									// shows a successful message after operation
									$('#edit-recipePhoto-messages').html('<div class="alert alert-success">'+
				            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
				            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
				          '</div>');

									// remove the mesages
				          $(".alert-success").delay(500).show(10, function() {
										$(this).delay(3000).hide(10, function() {
											$(this).remove();
										});
									}); // /.alert

				          // reload the manage student table
									manageRecipeTable.ajax.reload(null, true);

									$(".fileinput-remove-button").click();

									$.ajax({
										url: 'php_action/fetchRecipeImageUrl.php?i='+recipeId,
										type: 'post',
										success:function(response) {
										$("#getRecipeImage").attr('src', response);		
										}
									});																		

									// remove text-error 
									$(".text-danger").remove();
									// remove from-group error
									$(".form-group").removeClass('has-error').removeClass('has-success');

								} // /if response.success
								
							} // /success function
						}); // /ajax function
					}	 // /if validation is ok 					

					return false;
				}); // /update the recipe image

			} // /success function
		}); // /ajax to fetch recipe image

				
	} else {
		alert('error please refresh the page');
	}
} // /edit recipe function

// remove recipe 
function removeRecipe(recipeId = null) {
	if(recipeId) {
		// remove recipe button clicked
		$("#removeRecipeBtn").unbind('click').bind('click', function() {
			// loading remove button
			$("#removeRecipeBtn").button('loading');
			$.ajax({
				url: 'php_action/removeRecipe.php',
				type: 'post',
				data: {recipeId: recipeId},
				dataType: 'json',
				success:function(response) {
					// loading remove button
					$("#removeRecipeBtn").button('reset');
					if(response.success == true) {
						// remove recipe modal
						$("#removeRecipeModal").modal('hide');

						// update the recipe table
						manageRecipeTable.ajax.reload(null, false);

						// remove success messages
						$(".remove-messages").html('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
		          '</div>');

						// remove the mesages
	          $(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert
					} else {

						// remove success messages
						$(".removeRecipeMessages").html('<div class="alert alert-success">'+
		            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
		            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
		          '</div>');

						// remove the mesages
	          $(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert

					} // /error
				} // /success function
			}); // /ajax fucntion to remove the recipe
			return false;
		}); // /remove recipe btn clicked
	} // /if recipeid
} // /remove recipe function

function clearForm(oForm) {
	// var frm_elements = oForm.elements;									
	// console.log(frm_elements);
	// 	for(i=0;i<frm_elements.length;i++) {
	// 		field_type = frm_elements[i].type.toLowerCase();									
	// 		switch (field_type) {
	// 	    case "text":
	// 	    case "password":
	// 	    case "textarea":
	// 	    case "hidden":
	// 	    case "select-one":	    
	// 	      frm_elements[i].value = "";
	// 	      break;
	// 	    case "radio":
	// 	    case "checkbox":	    
	// 	      if (frm_elements[i].checked)
	// 	      {
	// 	          frm_elements[i].checked = false;
	// 	      }
	// 	      break;
	// 	    case "file": 
	// 	    	if(frm_elements[i].options) {
	// 	    		frm_elements[i].options= false;
	// 	    	}
	// 	    default:
	// 	        break;
	//     } // /switch
	// 	} // for
}