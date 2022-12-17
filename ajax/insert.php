<?php
include 'db.php';

if(isset($_POST['name'])){
    extract($_POST);
    $sql="insert into `ajax` (`name`,`email`,`phone`) values ('$name','$email','$phone')";
    if($db->query($sql)){
        $insert_id=$db->insert_id;
        $result['id']=$insert_id;
        $result['status']=true;
        $result['data']=$_POST;
        $result['msg']="Data Inserted";

    }else{
        $result['msg']="Error";
    }
    echo json_encode($result);
}


?>