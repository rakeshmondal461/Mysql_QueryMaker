<?php
$qry=$_POST['qr'];
$tblnm=$_POST['tblnm'];
$fldnm=$_POST['fldnm'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>SB Admin 2 - Bootstrap Admin Theme</title>

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->


<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

<!-- /.navbar-top-links -->
<?php
include('header.php');
?>
<?php
include('left_bar.php');
?>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"> <i class="fa fa-search" style="font-size: 36px;"></i> All Search</h1>
	</div>

</div>


<div class="row">
<div class="col-lg-12">
<textarea name="qr" id="qr" class="form-control" rows="16" align="left" style="width:100%;">
<?php 
$counter=0;
$counter1=0;
$arroffld=explode(",",$qry);
$arrsz=sizeof($arroffld);
?>
$all1="and  (<?php 	$fldarr=explode(",",$qry);
foreach ($fldarr as $value) {
$counter++;

echo $fld=strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $value))." like "."'%$".$fldnm."%' or ";
if($counter>=$arrsz-1){
break;
}
}
foreach ($fldarr as $value2) {
$fld1=strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $value2)).",";

}
echo rtrim($fld1,','); ?> like '%$<?php echo $fldnm;?>%' )"	

</textarea>
</div>
</div><br>
<div class="row">
<div class="col-lg-12" align="center">
<input type="button" name="" value="Copy Query" class="btn btn-primary" onclick="myFunction()">
</div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->


<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
<script>
function myFunction() {
/* Get the text field */
var copyText = document.getElementById("qr");

/* Select the text field */
copyText.select();

document.execCommand("Copy");
}
</script>
</body>

</html>
