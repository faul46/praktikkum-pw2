<?php 

$angka = [3,2,15,20,11,77,89];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {clear: both;}
	</style>
</head>
<body>

<?php  for ($i=0; $i < count($angka); $i++) { ?>
	<div class="k"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a) { ?>
	<div><?php echo $a; ?></div>
<?php } ?>


</body>
</html>