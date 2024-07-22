<?php
        if(isset($_POST['schpass']))
        {
              $schpass=$_POST['schpass'];
              $srchpass=$_POST['srchpass'];
              
              if($schpass==$srchpass)
              {
                $sql="UPDATE password SET password ='". $schpass."' WHERE userid='".$_SESSION['sname']."'";
                $conn->query($sql);
                echo"<script>alert('Successfully Password Modified')</script>";
                $_SESSION['spass']=$schpass;
              }
              else
              {
                echo"<script>alert('Retype Password Correctly')</script>";
              }
             
                unset($_POST['schpass']);
        }
        ?>