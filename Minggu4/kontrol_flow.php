<!DOCTYPE html>
 <html lang= "en">
 <head>

     <meta charset= "UTF-8">

     <title>
     	latihan loopping tabel
     	</title>
     		</head>
     			<body>

<h2>
	Membuat perulangan tabel
	  </h2>
	  <table berder="1" cellpadding="20" cellspacing="0">
	  	for ($b = 1; $b <= 20; $b++){
	  	if ($b % 2 === 1 ){
	  		echo "<tr bgcolor= '#ff9990>";
	  	}
	  	else 
	  		echo "<tr>";


	  		for ($k=1 <=9 ; $k++){
	  			echo "<td> $b,$k </td>";
	  		}

	  		echo "</tr>";

	  	}   			
	  	?>
	  	</table>
