<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		sistem camera
	</title>
	<link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/css/css.css">
</head>
<body> 
	<section>
		<div class="col-lg-12">
			<div align="center">
			  <video id="video" autoplay="video" class="form-control" controls=""></video>
			  <button class="btn btn-primary" id="start">iniciar</button>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script type="" src="js/javascript.js"></script>
	<script>
		$(document).ready(function() {
			$('#video').hide()
		});
	    $("#start").on('click', function() {
			$('#video').show()
		});				
	</script>
</body>
</html>