<?php
    include 'db.php';
    $id=$_GET['id'];


 print_r($_GET);

    // exit;
    $sql="SELECT * FROM crud WHERE id=$id";
    $result=$db->query($sql);
    $data=$result->fetch_assoc();
    // print_r($data);


?>
<form action="" method="post">
    <input type="text" value="<?php echo $data['Name']; ?>" name="name" placeholder="Name">
    <input type="text" value="<?php echo $data['Email']; ?>" name="email" placeholder="Email">
    <input type="text" value="<?php echo $data['Phone']; ?>" name="phone" placeholder="Phone">
    <input type="text" value="<?php echo $data['Batch']; ?>" name="batch" placeholder="Batch">
    <input type="submit" name="submit" value="Submit">
</form>
<pre>
<?php

if(isset($_POST['submit'])){

 
    extract($_POST);
// echo "";
    // print_r($_POST);
// echo "";
    $sql = "update crud set Name='$name', Email='$email', Phone='$phone' ,Batch='$batch' where id=$id";

    if($db->query($sql)){
        $msg = "Record updated successfully";
    } else{
        $msg = "ERROR: Could not able to execute $sql. " . $db->error;
    }

    header("Location: list.php?msg=$msg");

}

?></pre>