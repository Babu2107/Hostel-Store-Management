<?php
    if(isset($_POST['subal']))
    {
        $suid=$_POST['suid'];
        $sum=(int)$_POST['subal']+(int)$_POST['suamt'];
        $sql="UPDATE password SET balance ='". $sum."' WHERE userid='".$suid."'";
        $conn->query($sql);
        unset($_POST['sumal']);
    }
?>