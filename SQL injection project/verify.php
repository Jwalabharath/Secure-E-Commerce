<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("simplesqli");
$user=$_POST["UserId"];
$pass=$_POST["Password"];
$query=mysql_query("Select * from users where name='$user' and password='$pass';");
if(mysql_num_rows($query)){
	echo "<strong style='color:blue;'>Success!!! You are successfully perform the sql injection and login in as <span style='color:black;'>admin</span> </strong><br><br>";
	$users_data = mysql_query("select * from users;");
	echo "<table border='7'><thead><td>name</td><Td>password</td></thead>";
	while($row = mysql_fetch_array($users_data)) {
		echo "<tr><td>".$row["name"]."</td><td>".$row["password"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "<strong style='color:red;'>Invalid Credentials.</strong><br><br>";
}
?>
