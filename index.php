<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Annuaire</title>
  <style>
  	table ,tr,td{
  		border: 1px solid grey;
  		padding:4px;
  		font-weight: bold;
  	}
  </style>
</head>
<body>
	<main>
		<h1>Annuaire fictif</h1>
		<?php 
		    $config= require("config.php"); 
		   	echo '<table>';
		   	echo '<thead>
		   			<tr>
		   				<th>Prenom</th>
		   			    <th>Nom</th>
		   			    <th>Age</th>
		   			    <th>Email</th>
		   			    <th>Poste</th>
		   			</tr>
		   		</thead>';
		   	echo '<tbody>';
		    foreach ($config as $key => $personel) {
		    	
		    	echo '<tr>';
		    	echo '<td>'.ucfirst($personel['firstname']).'</td>';
		    	echo '<td>'.ucfirst($personel['lastname']).'</td>';
		    	echo '<td>'.ucfirst($personel['old']).'</td>';
		    	echo '<td>'.ucfirst($personel['mail']).'</td>';
		    	echo '<td>'.ucfirst($personel['job']).'</td>';
		    	echo '</tr>';
		    }
		    echo '</tbody>';
		    echo '</table>';
		?>

	</main>
</body>
</html>
