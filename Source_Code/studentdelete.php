<?php
    if(isset($_POST['sdid']))
    {
        $sdid=$_POST['sdid'];
        $sql="DELETE FROM password WHERE userid='".$sdid."'";
        $conn->query($sql);
        unset($_POST['sdid']);
    }
?>