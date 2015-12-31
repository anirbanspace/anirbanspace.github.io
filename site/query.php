<?php
	
		//$db=mysql_connect  ("localhost", "root",  "ANKAN1993") or die ('I cannot connect to the database  because: ' . mysql_error()); 
8	  //-select  the database to use 
9	  
	$dbhandle = sqlite_open('db/test.db', 0666, $error);
	$mydb=mysql_select_db("Carousel/db/company"); 
10	  //-query  the database table 
11	  $sql= "SELECT image_path,about_it,catalogue_path FROM Honeywell";  
12	  //-run  the query against the mysql query function 
13	  $result=mysql_query($sql); 
14	  //-create  while loop and loop through result set 
15	  while($row=mysql_fetch_array($result)){ 
16	          $image_path=$row['image_path']; 
17	          $about_it=$row['about_it']; 
18	          $catalogue_path=$row['catalogue_path']; 
19	  //-display the result of the array 
20	  echo "<ul>\n"; 
	  echo $image_path;


?>