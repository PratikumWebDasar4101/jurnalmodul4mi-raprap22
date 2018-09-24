<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td><img src= "<?php echo $_SESSION['pic']; ?>" ></td>
		</tr>
		<tr>
			<td>
				<?php
				$hobi = $_SESSION['hobi'];
				foreach ($hobi as $value ) {					
				?>
				<tr>
					<td><?php echo $value;?></td>
				</tr>
			<?php }?>
			</td>
			<td><a href="form.html">Hapus</a></td>
		</tr>
	</table>
</body>
</html>