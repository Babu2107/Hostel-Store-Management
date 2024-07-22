<?php
    if(isset($_POST['idid']))
    {
        $idid=$_POST['idid'];
        $sql="DELETE FROM items WHERE icode='".$idid."'";
        $conn->query($sql);
        unset($_POST['idid']);
    }
?>