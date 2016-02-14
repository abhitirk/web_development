<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php
	$xml=simplexml_load_file("cmodules.xml") or die("Error: Cannot create object");
	//print_r($xml);
	
	echo "<h1>".$xml[0]['title']."</h1><br><br>";
	
	$i = 0;
	foreach($xml->children() as $sub){
		
		echo "<h2>".$sub['title']."</h2><br>";
		
		if($i == 0){
			echo '<table border="1">';
			foreach ($sub->children() as $rows){
				echo "<tr>";
				echo "<td>".$rows['title'].'</td>';
				echo "<td>".$rows.'</td>';
				echo "</tr>";
			}
			echo '</table><br>';
			$i++;
		}
		else{
			echo "<ul>";
			foreach ($sub->children() as $rows){
				echo "<li>".$rows."</li>";
			}
			echo "</ul>";
		}
		echo "<br>";
	}
?>
</body>
</html>