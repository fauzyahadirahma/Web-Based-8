<html>
<head>
	<title>Operator Penugasan</title>
</head>
<body>
	<?php
		$a = 10; // mula-mula nilai awal variabel $a = 10
		echo "1. Penugasan +=";
		echo "<br />";
		
		$a += 8;
		echo "Variabel \$a saat ini bernilai : ".$a;
	?>
	
	<br />
	<br />
	<?php
		$a = 10; // nilai variabel $a dikembalikan menjadi 10
		echo "2. Penugasan ++";
		echo "<br />";
		
		$a++;
		echo "Variabel \$a saat ini bernilai : ".$a;
	?>
</body>
</html>