<?php
 $host="localhost:3306";
 $user="root";
 $pwd="";
 $db="webproject";
$conn=mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");
?>
<html>
   <head>
      <title>POLITICAL PARTY</title>
   </head>
   <body>
      <form method="post">
      <table>
     <tr><td><input type="submit" value="display" name="display"/></td></tr>
             </table>
      </form>
   </body>
</html>


<?php   
   if(isset($_POST['display'])){
      $sql="select * from political";
      $result=mysqli_query($conn,$sql);
      if($result){
         if(mysqli_num_rows($result)>0){
         echo "PARTYNAME <br>";
	   echo "FOUNDEDYEAR <br>";
	echo "IDEOLOGY <br>";
	echo "YOUTHWING <br>";
	echo "WOMWNSWING <br>";
	echo "HEADQUARTERS <br><br><br>";
        while($db =mysqli_fetch_row($result)){
         echo $db[0]."<br>";
	   echo $db[1]."<br>";
	   echo $db[2]."<br>";
	   echo $db[3]."<br>";
         echo $db[4]."<br>";
          echo $db[5]."<br>";
		echo  "<br>";
        }      
       }
      }
   }
       
 ?>  


