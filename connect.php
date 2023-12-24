<?php
    $childName = $_POST['childName']
    $childage = $_POST['childage']
    $childLastvaccine = $_POST['childLastvaccine']
    $childbirthplace = $_POST['childbirthplace']
    $parentNumber = $_POST['parentNumber']
    $parentEmail= $_POST['parentEmail']
    $parentAddress = $_POST['parentAddress']

    $conn = new mysqli('localhost' , 'root' , '' , 'unit');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(childName , childage , childLastvaccine , childbirthplace , parentNumber , parentEmail , parentAddress)
        values(? , ? , ? , ? , ? , ?, ? )");
        $stmt->bind_param("sississ ,  $childName , $childage , $childLastvaccine ,$childbirthplace , $parentNumber ,$parentEmail , $parentAddress ");
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();

    }