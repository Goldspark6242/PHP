
<form action="" method="post">
    <input type="text" name="name" placeholder="Name"> <br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <input type="text" name="batch" placeholder="Batch"><br>
    <input type="submit" name="submit" value="submit"><br>
</form>
<?php
include 'db.php';

if(isset($_POST['submit'])){
    extract($_POST);
    // print_r($_POST);


    $sql="INSERT into crud(Name,Email,Phone,Batch) values ('$name','$email','$phone','$batch')";

    if($db->query($sql)){
        echo "insert Successfully";

    }else{
        echo "insert Error";
    }
}
?>