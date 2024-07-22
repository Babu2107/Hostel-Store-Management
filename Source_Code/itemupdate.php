<?php
    if(isset($_POST['iuamt']))
    {
        $iuid=$_POST['iuid'];
        $sum=(int)$_POST['iuamt']+(int)$_POST['iuquan'];
        $sql="UPDATE items SET quantity ='". $sum."' WHERE icode='".$iuid."'";
        $conn->query($sql);
        unset($_POST['iuamt']);
    }
?>