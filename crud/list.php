<table  border=5>
    <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Batch</th>
        <th>Action</th>
    </tr>
<?php
include 'db.php';
$sql="SELECT * FROM crud";
$result=$db->query($sql);
// print_r($result);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "
        <tr>
    <td>$row[id]</td>
    <td>$row[Name]</td>
    <td>$row[Email]</td>
    <td>$row[Phone]</td>
    <td>$row[Batch]</td>
    <td><a href='edit.php?id=$row[id]'>Edit</a><a href='delete.php?id=$row[id]'>Delete</a></td>
   
</tr>";
    }
}

?>

</table>

<?php

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>
