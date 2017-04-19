<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>title</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

    </head>


<body>

<?php
DEFINE(SERVER, "localhost");
DEFINE(LOGIN, "root");
DEFINE(MDP, "root");
DEFINE(BASE, "mybase");

$connect = mysqli_connect(SERVER, LOGIN, MDP, BASE) or die("Ca ne Marche pas ............");


$result = mysqli_query($connect, 'SELECT * FROM monpremierphp');
while($data = mysqli_fetch_assoc($result)){
    echo "login:".$data['Login']."<br/>";
    echo "mdp:".$data['Mdp']."<br/>";
}

mysqli_query($connect, "INSERT INTO monpremierphp (Login, Mdp) VALUES ('test', 'titi')");

mysqli_query($connect, "UPDATE monpremierphp SET Login='Patrick' WHERE login='Pat'");

mysqli_query($connect, "DELETE FROM monpremierphp WHERE Login='simplon'");


?>

</body>

</html>


