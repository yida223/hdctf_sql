<?php
	include "mysql.php";
	mysql_select_db("sousou");
	$keywords=$_POST['keywords'];
	if(preg_match("/and|sleep| |=|ascii/i",$keywords)){
      exit("You're a hacker. I'm calling the police!!!");}
    $sql = "select * from sousou.flaaa1g where name like'%$keywords%'";
    $result = mysql_query($sql);
    if (!$result){
      die('No the star data'.mysql_error());
    }
    echo "<h2> star</h2>";
    echo "<table border='1'><tr><td>ID</td><td>name</td><td>email</td>";
    while($row=mysql_fetch_assoc($result)){
		echo "<tr><td>{$row['id']}</td>";
		echo "<td>{$row['name']}</td>";
		echo "<td>{$row['email']}</td>";
		echo "</tr>";
    }
	echo "</table>"
?>