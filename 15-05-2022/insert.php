<?php

include "connect.php";
if (isset($_POST ['submit'])){

$studName  =$_POST['name'];
$studNick  =$_POST['nickname'];
$studAge   =$_POST['age'];
$studPhone =$_POST['phone'];
$studScore =$_POST['score'];


$sqlinsert="INSERT INTO details (fname,nickname,age,score,phone) VALUES ('$studName','$studNick','$studAge','$studScore','$studPhone')";
mysqli_query($connect,$sqlinsert);
}

$select=mysqli_query($connect,"SELECT * FROM `details`") ;



?>

<table border = 3px style="margin: 0 35%  ">
 <tr> 
    
  <th> student name</th>
  <th>  nickname</th>
  <th>  age</th>
  <th>  phone</th>
  <th>  score</th>
</tr>
<?php

while($data=mysqli_fetch_assoc($select)):
?>
<tr>
    <td><?php echo $data['fname']?></td>
    <td><?php echo $data['nickname']?></td>
    <td><?php echo $data['age']?></td>
    <td><?php echo $data['score']?></td>
    <td><?php echo $data['phone']?></td>
    
</tr>
<?php endwhile; ?>
</table>