<?php include 'connec.php';?>
<?php
  session_start();
  if(!isset($_SESSION['sname']))
    header("Location:index.php");  
  else
    {
      $sql="SELECT * FROM password WHERE userid='".$_SESSION['sname']."'";
      $res=$conn->query($sql);
      $row=$res->fetch_assoc();
      $spid=$_SESSION['sname'];
      $spname=$row['name'];
      $sphostel=$row['hostel'];
      $sprnum=$row['roomno'];
      $spbal=$row['balance'];
      $sql="SELECT icode,iname,price FROM items ";
      $res=$conn->query($sql);
      $icodes="";
      $inames="";
      $price="";
      while($row=$res->fetch_assoc())
      {
          $icodes.=$row['icode'].",";
          $inames.=$row['iname'].",";
          $price.=$row['price'].",";
          
      }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MIT HOSTELS</title>
        <link rel="icon" href="assets/aulogo.png" type="image/x-icon">
        <link rel="stylesheet" href="student.css">
        <script type="text/javascript" src="student.js"></script>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
        <script>
  function buy21()
  {
    if(Number(document.getElementById('tamt').textContent)>=100){
    document.getElementById('purchase').style.display='block';
    document.getElementById('order').style.display='none';
    var codes='<?php echo $icodes; ?>';
    var names='<?php echo $inames; ?>';
    var price='<?php echo $price; ?>';
    cod=codes.split(',');
    nam=names.split(',');
    pric=price.split(',');
    de="";
    co=1;
    for(i=0;i<cod.length-1;i++)
      {
        inpt=document.getElementById("in"+cod[i])
        if(inpt.value!=0)
        {
        de+=co+"."+nam[i]+"("+cod[i]+")-";
        de+=inpt.value+" Nos-"+pric[i]*inpt.value+"Rs.\n";
        co++;
        }
      }
    de+="\nTotal Amount : "+document.getElementById('tamt').textContent+"Rs.";
    document.getElementById('tadet').value=de;
  }
  else
    alert("Minimum 100Rs to be Purchased.");
  }
  function clear1(s)
  {
  var codes='<?php echo $icodes; ?>';
  cod=codes.split(',');
    for(i=0;i<cod.length-1;i++)
      {
        document.getElementById("in"+cod[i]).value=0;
      }
  document.getElementById('tamt').textContent="0";
  view(s);  
  }
</script>
    </head>
    <body>
        <marquee behavior="" direction=""><img src="assets/aulogo.png" height="32px" width='32px' /> MIT HOSTEL STORES (Only For Hostellers)</marquee>
        <div class="topnav">
            <a id='aprofile' href="#;" onclick="view('profile')"><img src="assets/profile.png" height="11px"width='12px'/> Profile</a>
            <a id='aorder' href="#;" onclick="view('order')"><img src="assets/order1.png" height="11px"width='12px'/> Order</a>
            <a id='astatus' href="#;" onclick="view('status')"><img src="assets/status.png" height="11px"width='12px'/> Status</a>
            <a id='ahistory' href="#;" onclick="view('history')" ><img src="assets/history.png" height="11px"width='12px'/> History</a>
            <a href="index.php"><img src="assets/exit.png" height="11px"width='12px'/> Exit</a>
          </div>
          </div>
      </div>
      <div class="status" id="status">
      <table>
                <tr>
                    <td>SNO</td>
                    <td>Details</td>
                    <td>Bill No</td>
                    <td>Status</td>
                </tr>
                <?php include "status.php"?>
                </table>
      </div>
      <div class="history" id="history">
      <table>
                <tr>
                    <td>SNO</td>
                    <td>Details</td>
                    <td>Bill No</td>
                    <td>Status</td>
                </tr>
                <?php include "history.php"?>
                </table>
      </div>
      </div>
      <div class="purchase" id="purchase">
        <fieldset>
          <form action="" method='post'>
            <legend> DETAILS</legend>
            <br>
            <textarea rows=20 cols=40 id='tadet' name="tadet"  readonly></textarea>
            <br><br>
            <button type="submit"class="button_slide slide_down">BUY</button>
          </form>
          <br>
          <button class="button_slide slide_down" onclick='view("order")'>EDIT</button>
        </fieldset>
        <?php
            if(isset($_POST['tadet']))
            {
              $pid=str_shuffle("123456789QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm");
              $pid=str_shuffle($pid);
              $pid=str_shuffle($pid);
              $pid=substr($pid,0,8);
              $sql="INSERT INTO orders VALUES('".$_SESSION['sname']."','".$pid."','".$_POST['tadet']."','0')";
              $conn->query($sql);
              $s=$_POST['tadet'];
              $j=0;
              $icode1 =[];
              $iquan1 =[];
              $coo= substr_count( $s, "\n" )-1;
              $ch=0;
              while($ch!=$coo)
              {
                $i=strpos($s,'(',$j);
                $k=substr($s,$i+1,4);
                $j=$i+6;
                array_push($icode1,$k);
                $hr=strpos($s,' ',$j);
                $k=substr($s,$j+1,$hr-$j);
                array_push($iquan1,$k);
                $sql="SELECT quantity FROM items WHERE icode='".$icode1[$ch]."'";
                $res=$conn->query($sql);
                $row=$res->fetch_assoc();
                $rquan=(int)$row['quantity']-(int)$iquan1[$ch];
                $sql="UPDATE items SET quantity ='". $rquan."' WHERE icode='".$icode1[$ch]."'";
                $conn->query($sql);
                $ch++;
              }
              $i=strpos($s,':');
              $j=$i+1;
              $hr=strrpos($s,'Rs',$j);
              $tamtt=substr($s,$j+1,$hr-$j-1);
              $rbal=$spbal-(int)$tamtt;
              $spbal=$rbal;
              $sql="UPDATE password SET balance ='". $rbal."' WHERE userid='".$_SESSION['sname']."'";
              $conn->query($sql);
              unset($_POST['tadet']);
            }
        ?>
      </div>
      <div class="profile" id="profile">
      <fieldset>
                  <legend> PROFILE</legend>
                  <label for="spname"><img src="assets/student.png" height="11px"width='12px'/> Student Name :</label><br>
                  <input type="text" id="spname" name="spname" value="<?php echo (isset($spname)==true) ? $spname:''; ?>" readonly/><br><br>
                  <label for="spid"><img src="assets/id.png" height="11px"width='12px'/> Student Id :</label><br>
                  <input type="number" id="spid" name="spid"value="<?php echo (isset($spid)==true) ? $spid:''; ?>" readonly/><br><br>
                  <label for="sphostel"><img src="assets/hostel.png" height="11px"width='12px'/> Hostel Name :</label><br>
                  <input type="text" id="sphostel" name="sphostel"value="<?php echo (isset($sphostel)==true) ? $sphostel:''; ?>" readonly/><br><br>
                  <label for="sprnum"><img src="assets/roomnum.png" height="11px"width='12px'/> Room No :</label><br>
                  <input type="number" id="sprnum" name="sprnum"value="<?php echo (isset($sprnum)==true) ? $sprnum:''; ?>" readonly /><br><br>
                  <label for="spbal"><img src="assets/roomnum.png" height="11px"width='12px'/> Balance :</label><br>
                  <input type="number" id="spbal" name="spbal"value="<?php echo (isset($spbal)==true) ? $spbal:''; ?>" readonly /><br><br>
                  <button class="profilebut" onclick="changepass()">Change Password</button>
        </fieldset>
      </div>
      <div class="changepass" id="changepass">
          <br><br><br>
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
            <form action=" " method="post">
            <label for="schpass"><img src="assets/userid.png" height="11px"width='12px'/> New Password :</label>
            <input type="password" id="schpass" name="schpass" minlength="10" maxlength="10" required><br><br>
            <label for="srchpass"><img src="assets/pass.png" height="11px"width='12px'/> Re-Type Password :</label>
            <input type="text" id="srchpass" name="srchpass" minlength="10" maxlength="10" required/><br><br>
            <button type="submit"><img src="assets/login.png" height="11px"width='12px'/> Change</button>
            <br><br>
            </form>
            <button onclick="view('profile')"><img src="assets/back.png" height="11px"width='12px'/> Back</button>
        </fieldset>
        <?php include "changepass.php"?>
      </div>
      <div class="order" id="order">
      <table>
                <tr>
                    <td>SNO</td>
                    <td>Item name</td>
                    <td>Item</td>
                    <td>Item Code</td>
                    <td>Price</td>
                    <td>Quatity</td>
                    <td>Availibility</td>
                    <td>Add Item</td>
                </tr>
      <?php include "order.php"?>
      </div>
    </body>
</html>