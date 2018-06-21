<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Projet</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

	<style type="text/css">

	</style>
</head>
<body>

<div class="container">
<br>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<center><h3>A propos des voitures</h3></center>
		</div>
		<div class="panel-body">
			<div class="col-md-12 col-lg-12 col-sm-12">
	   					<div class="col-md-4 col-lg-4 col-sm-4">
	     					<input class="form-control" type="text" name="motCle" id="motCle" /><br>
	   					</div>
	   					<div class="col-md-4 col-lg-4 col-sm-4">
	     					<button type="button" class="btn btn-danger" id="search">Chercher</button>
	   					</div>
			</div>
		</div>
	</div>
<div id="ici">
	
</div>
</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
    	$('#search').on('click',function(){
    		var motCle = $('#motCle').val();
    		$.ajax({
	            url:"http://localhost:4040/OussRed/index.php/welcome/get", //hna 7eyed dik :4040
	            method:"post",
	            data:{motCle:motCle},
	            success:function(data){
	              $('#ici').html(data);
				  $('#table')
				        .removeClass( 'display' )
				        .addClass('table table-striped table-bordered');
				  $(document).ready(function() {
				  $('#table').DataTable();
				    });
            	}
        });
    	})
    	
    } );
</script>
</html>