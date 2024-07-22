<?php
        if(isset($_POST['sname']))
        {
              $sname=$_POST['sname'];
              $sid=$_POST['sid'];
              $apass=$_POST['apass'];
              $shostel=$_POST['shostel'];
              $srnum=$_POST['srnum'];
              $samt=$_POST['samt'];
               $sql="SELECT userid FROM password WHERE userid='$sid'";
               $res=$conn->query($sql);
               if($res->num_rows==0)
               {
                $sql="INSERT INTO password VALUES('".$sid."','".$sname."','".$apass."','".$samt."','".$shostel."','".$srnum."')";
                $conn->query($sql);
                echo"<script>alert('Success')</script>";
              }
               else
               {
                echo"<script>alert('User Id Already Exist')</script>";
               }
             
            unset($_POST['sname']);
              }
        ?>