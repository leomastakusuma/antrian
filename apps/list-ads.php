<!DOCTYPE html>
<?php 

	include "mysql_connect.php";		
	$hasil = $mysqli->query('select * from data_images where status!=0');		
    $data = $hasil->fetch_all();
    // var_dump($data);
    include 'mysql_close.php';
    $i=0;
?>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Advertise : List</title>
	    <link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../assert/css/jumbotron-narrow-monitoring.css" rel="stylesheet">
		<script src="../assert/js/jquery.min.js"></script>
	</head>
  	<body>
    <div class="container">
    	<center>
	    	<div class="blog-header">
			    <img src="../assert/img/bni.png" width="300px;" style="margin: 10px;">
		    </div>
	    </center>
		<div class="row col-lg-12 vertical-center">
      	</div>
      	<div class="row col-lg-6">
          <a href="ads-add.php" class="btn btn-success"> Create New</a>
          <table class="table table-bordered table-hover table-striped">
            <thead class="bg-primary">
                <tr>
                    <th width="40px">No</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $dt):?>
                    <tr>
                        <td><?php echo ++$i?></td>
                        <td><?php echo $dt[2]?></td>
                        <td><?php echo $dt[1]==1?'Image':'Video'?></td>
                        <td><?php echo $dt[4]==1?'Active':'Draft'?></td>
                        <td>
                            <a href="ads-update.php?action=edit&id=<?php echo $dt[0]?>"class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                            <?php if($dt[4]==1):?>
                                <a href="ads-update.php?action=draft&id=<?php echo $dt[0]?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-remove"></span> Drafted</a>
                            <?php else:?>
                                <a href="ads-update.php?action=activate&id=<?php echo $dt[0]?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-check"></span> Activate</a>
                            <?php endif?>
                            <a href="ads-update.php?action=delete&id=<?php echo $dt[0]?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
          </table>
      	</div>
    </div>
  	</body>
</html>

