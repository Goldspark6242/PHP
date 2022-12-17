<?php 

include 'db.php';

if(isset($_POST['id'])){

    $id = $_POST['id'];

    $sql = "UPDATE ajax SET name = '$_POST[name]', email = '$_POST[email]', phone = '$_POST[phone]' WHERE id = $id";

    if($db->query($sql)){
        $result['status'] = true;
        $result['msg'] = "Data Updated";
    } else{
        $result['status'] = false;
        $result['msg'] = "Data Not Updated";
    }

    echo json_encode($result);

}


?>