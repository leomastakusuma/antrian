<?php 
	session_start();
	if (!isset($_SESSION["loket_client"])) {
		$_SESSION["loket_client"] = NULL;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Admin : Queue</title>
	    <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
    	<form>
    		<div class="jumbotron">
	        <h1 class="next">
	        	<span class="glyphicon glyphicon-book"></span>
	        </h1>
        	<button type="button" class="btn btn-primary next_getway">Next CS <span class="glyphicon glyphicon-chevron-right"></span></button>
	      	</div>
    	</form>
		<form>
    		<div class="jumbotron">
	        <h1 class="next-tabungan">
	        	<span class="glyphicon glyphicon-book"></span>
	        </h1>
        	<button type="button" class="btn btn-primary next_getway_tabungan">Next Tabungan <span class="glyphicon glyphicon-chevron-right"></span></button>
	      	</div>
    	</form>
    	<form>
    		<div class="jumbotron">
	        <h1 class="next-kredit">
	        	<span class="glyphicon glyphicon-book"></span>
	        </h1>
        	<button type="button" class="btn btn-primary next_getway_kredit">Next Kredit <span class="glyphicon glyphicon-chevron-right"></span></button>
	      	</div>
    	</form>
    
    	<br/>
      	<footer class="footer">
        <p>&copy; Antrian <?php echo date("Y");?></p>
      	</footer>
    </div>
  	</body>
  	<script type="text/javascript">
	$("document").ready(function()
	{
		// GET LAST COUNTER
	    $.post( "../apps/admin_getway.php", function( data ) {
			$(".next").html(data['next']);
		},"json");
	    $.post( "../apps/admin_getway_conter_b.php", function( datatabungan ) {
			$(".next-tabungan").html(datatabungan['next']);
		},"json");
	    $.post( "../apps/admin_getway_conter_c.php", function( datakredit ) {
			$(".next-kredit").html(datakredit['next']);
		},"json");
	    // RESET 
		$(".next_getway").click(function(){
			var next_current = $(".next").text();
			$.post( "../apps/admin_getway.php", {"next_current": next_current}, function( data ) {
				$(".next").html(data['next']);
			},"json");
		});
		$(".next_getway_tabungan").click(function(){
			var next_current = $(".next").text();
			$.post( "../apps/admin_getway_conter_b.php", {"next_current": next_current}, function( data ) {
				$(".next-tabungan").html(data['next']);
			},"json");
		});
		$(".next_getway_kredit").click(function(){
			var next_current = $(".next").text();
			$.post( "../apps/admin_getway_conter_c.php", {"next_current": next_current}, function( data ) {
				$(".next-kredit").html(data['next']);
			},"json");
		});

	});
	</script>
</html>

