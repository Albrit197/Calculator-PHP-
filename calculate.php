<?php
	if(ISSET($_POST['calculate'])){
?>
<table  border="2">
	<?php
       
		for($i = 1; $i <= $_POST['digit']; $i++) {
			echo "<tr>";
 
			for($j = 1; $j <= $_POST['digit']; $j++){
 
				echo"<td>".$i*$j."</td>";
			}
 
			echo"</tr>";
		}
 
	?>
</table>
<?php		
	}
?>