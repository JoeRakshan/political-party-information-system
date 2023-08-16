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
   
   <body><center>
   
<h1>UPDATION OF PARTIES</h1>
      <form method="post">
      <table>
     <tr> <td>party_name: </td><td><input type="text" name="partyname"/></td></tr>
             
       <tr> <td>founded_year:</td><td> <input type="number" name="year"/></td></tr> 
      <tr> <td>ideology: </td><td><input type="text" name="ideo"/></td></tr> 
	<tr> <td>youth_wing: </td><td><input type="text" name="youth"/></td></tr>
	<tr> <td>womens_wing: </td><td><input type="text" name="womens"/></td></tr>
	<tr> <td>headquarters: </td><td><input type="text" name="head"/></td></tr>
      
       <tr><td><input type="submit" name="submit"/></td></tr>
             </table>
      </form></center>
   </body>
</html>
<?php
  if(isset($_POST['submit'])){
 $partyname = $_POST['partyname'];
$year = $_POST['year'];
$ideo = $_POST['ideo'];
$youth = $_POST['youth'];
$womens = $_POST['womens'];
$head = $_POST['head'];

     $query="insert into political(party_name,founded_year,ideology,youth_wing,womens_wing,headquarters) values('$partyname','$year','$ideo','$youth','$womens','$head')";

    $run=mysqli_query($conn,$query);

    if($run){
       echo "<h1>Data submitted successfully</h1>";
     }

    else{
       echo "<h1>Failed to submit data</h1>";
     }
   }
   ?>
