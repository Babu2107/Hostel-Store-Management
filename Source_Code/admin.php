<?php
  session_start();
  if(!isset($_SESSION['aname']))
    header("Location:index.php");  
?>
<?php include 'connec.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>MIT HOSTELS</title>
        <link rel="icon" href="assets/aulogo.png" type="image/x-icon">
        <link rel="stylesheet" href="admin.css">
        <script type="text/javascript" src="admin.js"></script>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </head>
    <body>
        <marquee behavior="" direction=""><img src="assets/aulogo.png" height="32px" width='32px' /> MIT HOSTEL STORES (Only For Hostellers)</marquee>
        <div class="topnav">
            <a id='aorders' href="#;" onclick="view('orders')"><img src="assets/order.png" height="11px"width='12px'/> Orders</a>
            <a id='adelivery' href="#;" onclick="view('delivery')"><img src="assets/delivery.png" height="11px"width='12px'/> Delivery</a>
            <a id='adelivered' href="#;" onclick="view('delivered')" ><img src="assets/delivered.png" height="11px"width='12px'/> Delivered</a>
            <a id='aitems' href="#;" onclick="view('items')"><img src="assets/item.png" height="11px"width='12px'/> Items</a>
            <a id='astudents' href="#;" onclick="view('students')"><img src="assets/student.png" height="11px"width='12px'/> Students</a>
            <a id='aaddnewitem' href="#;" onclick="view('addnewitem')" ><img src="assets/additem.png" height="11px"width='12px'/> Add New Items</a>
            <a id='aaddstudent' href="#;" onclick="view('addstudent')"><img src="assets/addstudent .png" height="11px"width='12px'/> Add Student</a>
            <a href="index.php"><img src="assets/exit.png" height="11px"width='12px'/> Exit</a>
          </div>
          </div>
      </div>
      <div class="orders" id="orders">
      <table>
                
                <?php include "ordetail.php"?>
                </table>
                  <?php
                      if(isset($_POST['pidd'])){
                        $pidd=$_POST['pidd'];
                        $sql='UPDATE  orders SET status="1" WHERE productid="'.$pidd.'"';
                        $conn->query($sql);
                        unset($_POST['pidd']);
                      }
                ?>
      </div>
      <div class="delivery" id="delivery">
                <table>
                  <?php include "deliverydetail.php"?>
                </table>
                <?php
                      if(isset($_POST['piidd'])){
                        $piidd=$_POST['piidd'];
                        $sql='UPDATE  orders SET status="2" WHERE productid="'.$piidd.'"';
                        $conn->query($sql);
                        unset($_POST['piidd']);
                      }
                ?>
      </div>
      </div>
      <div class="delivered" id="delivered">
      <table>
                <?php include "deldetail.php"?>
                </table>
      </div>
      <div class="updateitem" id="updateitem">
                <fieldset>
                    <legend>UPDATE ITEM</legend>
                    <form action="" method="post">
                    <label for="iuname"><img src="assets/student.png" height="11px"width='12px'/> Item Name :</label><br>
                      <input type="text" id="iuname" name="iuname" readonly/><br><br>
                      <label for="iuid"><img src="assets/id.png" height="11px"width='12px'/> Item Code :</label><br>
                      <input type="number" id="iuid" name="iuid" readonly /><br><br>
                      <label for="iuprice"><img src="assets/hostel.png" height="11px"width='12px'/> Price :</label><br>
                      <input type="number" id="iuprice" name="iuprice" readonly/><br><br>
                      <label for="iuquan"><img src="assets/roomnum.png" height="11px"width='12px'/> Quantity :</label><br>
                      <input type="number" id="iuquan" name="iuquan" readonly /><br><br>
                      <label for="iuamt"><img src="assets/student.png" height="11px"width='12px'/> Quantity to be added :</label><br>
                      <input type="number" id="iuamt" name="iuamt" min='10' max='100'  required/><br><br>
                      <button type="submit" ><img src="assets/addstudent .png" height="11px"width='12px'/> UPDATE</button>
                    </form>
                    <br>
                    <button onclick='view("items")'><img src="assets/addstudent .png" height="11px"width='12px'/>CANCEL</button>
                </fieldset>
                <?php include "itemupdate.php"?>
      </div>
      <div class="itemdelete" id="itemdelete">
      <fieldset>
                    <legend>DELETE ITEM</legend>
                    <form action="" method="post" id='deliteform'>
                      <label for="idname"><img src="assets/student.png" height="11px"width='12px'/> Item Name :</label><br>
                      <input type="text" id="idname" name="idname"  readonly/><br><br>
                      <label for="idimg"><img src="assets/student.png" height="11px"width='12px'/> Item Image(File Name With EXT) :</label><br>
                      <input type="text" id="idimg" name="idimg"readonly/><br><br>
                      <label for="idid"><img src="assets/id.png" height="11px"width='12px'/> Item Code :</label><br>
                      <input type="number" id="idid" name="idid" readonly /><br><br>
                      <label for="idprice"><img src="assets/hostel.png" height="11px"width='12px'/> Price :</label><br>
                      <input type="number" id="idprice" name="idprice" readonly/><br><br>
                      <label for="idquan"><img src="assets/roomnum.png" height="11px"width='12px'/> Quantity :</label><br>
                      <input type="number" id="idquan" name="idquan" readonly /><br><br>
                      <button type="submit" ><img src="assets/addstudent .png" height="11px"width='12px'/> DELETE</button>
                    </form>
                    <br>
                    <button onclick='view("items")'><img src="assets/addstudent .png" height="11px"width='12px'/>CANCEL</button>
                </fieldset>
                <?php include "itemdelete.php"?>
      </div>
      <div class="studentupdate" id="studentupdate">
                <fieldset>
                    <legend>STUDENT UPDATE</legend>
                    <form action="" method="post">
                    <label for="suname"><img src="assets/student.png" height="11px"width='12px'/> Student Name :</label><br>
                    <input type="text" id="suname" name="suname"  readonly/><br><br>
                    <label for="suid"><img src="assets/id.png" height="11px"width='12px'/> Student Id :</label><br>
                    <input type="number" id="suid" name="suid" readonly/><br><br>
                    <label for="suhostel"><img src="assets/hostel.png" height="11px"width='12px'/> Hostel Name :</label><br>
                    <input type="text" id="suhostel" name="suhostel" readonly/><br><br>
                    <label for="surnum"><img src="assets/roomnum.png" height="11px"width='12px'/> Room No :</label><br>
                    <input type="number" id="surnum" name="surnum" readonly /><br><br>
                    <label for="suamt"><img src="assets/amount.png" height="11px"width='12px'/> Balance :</label><br>
                    <input type="number" id="suamt" name="suamt" readonly /><br><br>
                    <label for="subal"><img src="assets/amount.png" height="11px"width='12px'/> Amount To Be Added :</label><br>
                    <input type="number" id="subal" name="subal" min="100" max="1000"required /><br><br>
                    <button type="submit"><img src="assets/addstudent .png" height="11px"width='12px'/> UPDATE</button>
                    </form>
                    <br>
                    <button onclick='view("students")'><img src="assets/addstudent .png" height="11px"width='12px'/>CANCEL</button>
                </fieldset>
                <?php include "studentupdate.php"?>
      </div>
      <div class="studentdelete" id="studentdelete">
                <fieldset>
                  <legend>DELETE STUDENT</legend>
                  <form action="" method="post" >
                    <label for="sdname"><img src="assets/student.png" height="11px"width='12px'/> Student Name :</label><br>
                    <input type="text" id="sdname" name="sdname"  readonly/><br><br>
                    <label for="sdid"><img src="assets/id.png" height="11px"width='12px'/> Student Id :</label><br>
                    <input type="number" id="sdid" name="sdid" readonly/><br><br>
                    <label for="sdhostel"><img src="assets/hostel.png" height="11px"width='12px'/> Hostel Name :</label><br>
                    <input type="text" id="sdhostel" name="sdhostel" readonly/><br><br>
                    <label for="sdrnum"><img src="assets/roomnum.png" height="11px"width='12px'/> Room No :</label><br>
                    <input type="number" id="sdrnum" name="sdrnum" readonly /><br><br>
                    <label for="sdamt"><img src="assets/amount.png" height="11px"width='12px'/> Balance :</label><br>
                    <input type="number" id="sdamt" name="sdamt" readonly /><br><br>
                    <button type="submit"><img src="assets/addstudent .png" height="11px"width='12px'/> DELETE</button>
                  </form>
                  <br>
                  <button onclick='view("students")'><img src="assets/addstudent .png" height="11px"width='12px'/>CANCEL</button>
                  </fieldset>
                  <?php include "studentdelete.php"?>
      </div>
      
          <div class="items" id='items'>
            <table>
                <tr>
                    <td>SNO</td>
                    <td>Item name</td>
                    <td>Item</td>
                    <td>Item Code</td>
                    <td>Price</td>
                    <td>Quatity</td>
                    <td>Availibility</td>
                    <td>Modify</td>
                    <td>Delete</td>
                </tr>
                <?php include 'itemdetail.php' ?>
            </table>
          </div><div class="students" id="students">
            <table>
                <tr>
                    <td>SNO</td>
                    <td>User Id</td>
                    <td>Name</td>
                    <td>Hostel</td>
                    <td>Room No</td>
                    <td>Balance</td>
                    <td>Payment</td>
                    <td>Delete</td>
                </tr>
                <?php include 'studentdetail.php' ?>

            </table>
          </div>
          </div>
          <div class="addnewitem" id="addnewitem">
          <form action="" method="post">
                <fieldset>
                    <legend>ADD ITEM</legend>
                    <label for="iname"><img src="assets/itemnew.png" height="11px"width='12px'/> Item Name :</label><br>
                    <input type="text" id="iname" name="iname"  required/><br><br>
                    <label for="iimg"><img src="assets/itemimage.png" height="11px"width='12px'/> Item Image(File Name With EXT) :</label><br>
                    <input type="text" id="iimg" name="iimg" placeholder="Eg:assets/2020.jpg" required/><br><br>
                    <label for="iid"><img src="assets/code.png" height="11px"width='12px'/> Item Code :</label><br>
                    <input type="number" id="iid" name="iid"  required /><br><br>
                    <label for="iprice"><img src="assets/price.png" height="11px"width='12px'/> Price :</label><br>
                    <input type="number" id="iprice" name="iprice" min="10" max="60" required/><br><br>
                    <label for="iquan"><img src="assets/quantity.png" height="11px"width='12px'/> Quantity :</label><br>
                    <input type="number" id="iquan" name="iquan" min='10' max='100' required /><br><br>
                    <button type="submit"><img src="assets/add.png" height="11px"width='12px'/> ADD</button>
                </fieldset>
          </form>
          <?php include 'itemcheck.php';?>
        </div>
        <div class="addstudent" id="addstudent">
        <form action="" method="post">
                <fieldset>
                    <legend>ADD STUDENT</legend>
                    <label for="sname"><img src="assets/student.png" height="11px"width='12px'/> Student Name :</label><br>
                    <input type="text" id="sname" name="sname" minlength='4' maxlength='10' required/><br><br>
                    <label for="sid"><img src="assets/id.png" height="11px"width='12px'/> Student Id :</label><br>
                    <input type="text" id="sid" name="sid" minlength='10'maxlength='10' placeholder="Eg:2022506095" pattern="[2][0-9]{9}" required /><br><br>
                    <label for="apass"><img src="assets/pass.png" height="11px"width='12px'/> Password :</label><br>
                    <input type="password" id="apass" name="apass"minlength="10" maxlength="10"   required/><br><br>
                    <label for="shostel"><img src="assets/hostel.png" height="11px"width='12px'/> Hostel Name :</label><br>
                    <input type="text" id="shostel" name="shostel"  required/><br><br>
                    <label for="srnum"><img src="assets/roomnum.png" height="11px"width='12px'/> Room No :</label><br>
                    <input type="number" id="srnum" name="srnum"  required /><br><br>
                    <label for="samt"><img src="assets/amount.png" height="11px"width='12px'/> Amount :</label><br>
                    <input type="number" id="samt" name="samt" min='1000' max='2000' required /><br><br>
                    <button type="submit"><img src="assets/addstudent .png" height="11px"width='12px'/> ADD</button>
                </fieldset>
      </form>
      <?php include 'studentcheck.php';?>
    </div>
    </body>
</html>