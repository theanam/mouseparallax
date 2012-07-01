<!DOCTYPE html>
<html>
	<head>
		<title>Mouse Parallax Demo</title>
		<script src="jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="min/jquery.mouseparallax.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="anam">
			<div class="content">
				<?php 
				for($b=0;$b<16;$b++){
				for($a=0;$a<6;$a++){
				echo "ANAM";
				echo $b;
				echo $a;
				}
				echo "<br>";
				}
				?>
				
			</div>
			<span id="result"></span>
			<script type="text/javascript">
				$('.anam').mouseParallax({
					direction:'xy'
				});
			</script>
		</div>
	</body>
</html>