
		$(document).ready(function(){
				$("#de").change(function(){
					$.ajax({
						url:"../emferm/procesa.php",
						type: "POST",
						data:"idmarca="+$("#de").val(),
						success: function(opciones){
							$("#a").html(opciones);
						}
					})
				});
			});

		$(document).ready(function(){
				$("#a").change(function(){
					$.ajax({
						url:"gen_tabla.php",
						type: "POST",
						data:"firts_fech="+$("#de").val() + "&second_fech="+$("#a").val(),
						success: function(table){
							$("#data_table").html(table);
						}
					})
				});
			});



		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});