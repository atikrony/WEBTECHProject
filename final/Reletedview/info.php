<html>
<head>
    <title>After Login</title>
    <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
    <div>
        <form action="" id="form-center">
    <?php 

$data = file_get_contents("../data/data.json");
$mydata = json_decode($data);

$count=count($mydata);
echo "My Name: ".$mydata[$count-1]->fname; echo "<br>";
echo "My Birthday: ".$mydata[$count-1]->birthday; echo "<br>";
echo "My E-mail: ".$mydata[$count-1]->email; echo "<br>";
echo "My Phone Number: ".$mydata[$count-1]->number; echo "<br>";
echo "My ID: ".$mydata[$count-1]->id;	echo "<br>";
echo "My User Name: ".$mydata[$count-1]->username; echo "<br>";
echo "My Gender: ".$mydata[$count-1]->gender; echo "<br>";

//show file from data.json
//echo "My Profile Picture: <img src='../data/data.json".$mydata[$count-1]->file."' width='100px' height='100px'>"; echo "<br>";
?>

<br>
<br>
     <a href="../Controller/logout.php"><input class="shape submit" type="button" value = "LOGOUT ? ">
     </a>
</div>
</form>
</body>
</html>