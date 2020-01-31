<html>
<head>
	<meta charset="utf-8">
	<title>Exemplos de Gráficos PHPlot</title>
<style type="text/css">

		        BODY{
        font-family: Calibri;
        } 
		
		table {
	    border:solid 1px;
		border-radius:0px 10px 0px 10px;
		background: #FFFFFF;
		}

		td{
			border-radius:0px 10px 0px 10px;
		}

	#menu {
		margin:0;
		position:fixed;
		top:100	;
		width:100;
		height:200px;
		padding: 0;
	}
</style>

</head>

<body>
	

<center>

<?php
$dir    = 'phplottest/';
$files = scandir($dir);

if (isset($_GET['letra'])) { 
	$letra = $_GET['letra'];
}else{
	$letra = "a";
}

$letras = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

sort($files);

echo "<ul id=menu><table border=1><tr><td>Letra: $letra</td></tr>";
foreach ($letras as $key => $value) {
		echo "<tr><td><a href='index.php?letra=".strtolower($value)."'><center>".$value."<center></a></td></tr>";
}

echo "</table></ul>";

foreach ($files as $key => $value) {
	if($value != ".." && $value != "." && substr($value,0,1) == $letra && strpos($value, ".php")>0){

	echo "<a href='".$dir.$value."'>".$value."</a><br><img src='".$dir.$value."'><br><br><br>";
	}
}
?>
</body>
</html>