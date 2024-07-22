 <?php
        if(isset($_POST['iid']) )
        {
          $iname=$_POST['iname'];
          $iid=$_POST['iid'];
          $iimg=$_POST['iimg'];
          $iprice=$_POST['iprice'];
          $iquan=$_POST['iquan'];
          $sql="SELECT icode FROM items WHERE icode='$iid'";
          $res=$conn->query($sql);
          if($res->num_rows==0)
          {
            $sql="INSERT INTO items VALUES('".$iname."','".$iimg."','".$iid."','".$iquan."','".$iprice."','0')";
            $conn->query($sql);
            echo"<script>alert('Successfull')</script>";
          }
          else
          {
            echo"<script>alert('Item Code Already Exist')</script>";
          }
          unset($_POST['iid']);
        }
?>