<?php 
	
	$var = mysqli_connect('localhost', 'root', '', 'edlab');
	function display()
	{
		global $var;
		$query ="SELECT * FROM `users`";
		$run = mysqli_query($var, $query);

		if ($run == TRUE) {
			?>
			<center><table border="5" width="50%">
				<?php
			
			while ( $data = mysqli_fetch_assoc($run)) {
				?>
				<tr>
					<td> <?php echo $data['id'];
							   echo "<br>"; ?>
							
					</td>					
					<td> <?php echo $data['username'];
							   echo "<br>"; ?>
							
					</td>					
					<td> <?php echo $data['email'];
							   echo "<br>"; ?>
							
					</td>					
										
				</tr></center>
				<?php
			}
			?>
			</table>
			<?php

		} else {
			echo "Error!";
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>School-Management</title>
 </head>
 <body>
 		<?php  
 			display();
 		?>
 </body>
 </html>