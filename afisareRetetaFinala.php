<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "retete";

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	
	
	$query="SELECT ingredientsicantitate,id FROM afisare ORDER BY id";
	$result=mysqli_query($connect,$query);
	$query1="SELECT id,preparat,gramaj FROM afisare ORDER BY preparat";
	$result1=mysqli_query($connect,$query1);

	$sql = "SELECT count(ingredientsicantitate) AS total FROM afisare";
	$res=mysqli_query($connect,$sql);
	$values=mysqli_fetch_array($res);
	$num_rows=$values['total'];


?>

<!DOCTYPE html>

<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

	<table class="for" align="center" border="1px" style="width: 1400px; line-height: 40px;">
		<tr>
			<td>    </td>
				<?php
					while($rows1=mysqli_fetch_array($result)) {
						$datas[]=$rows1;		
				?>
		
			<td><?php echo $rows1['ingredientsicantitate'];?></td>	

				<?php
					}		
				?>
						

		</tr>
				<?php
					while($rows2=mysqli_fetch_array($result1)) {
				?>		
		<tr>
				<td><?php echo $rows2['preparat'];?></td>

					<?php
						
						
							foreach ($datas as $data) { ?>

								<?php							 
								if($data['id']==$rows2['id']){	?>
					         		<td><?php echo $rows2['gramaj'];?></td>
								<?php
								} else {?>
									<td>    </td>
									<?php
								}
								?> 

							<?php

							}
							?>

				
		</tr>
				<?php
				}
				?>

	</table>









</body>
</html>