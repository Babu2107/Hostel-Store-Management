<?php include 'connec.php';?>
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>MIT HOSTELS</title>
    <link rel="icon" href="assets/aulogo.png" type="image/x-icon">
    <style>
        html{
            zoom:175%;
        }
        body {
            background-color: darkgray;
        }
        fieldset {
            background-color: #23463f;
            height: 175px;
            width: 150px;
            margin: 0 auto;
            text-align: center;
            font-weight: bolder;
        }
        legend {
            background-color: #23463f;
            color: white;
            padding: 5px 10px;
            border: solid black;
        }
        button {
            background-color: #23463f;
            color: rgb(0, 0, 0);
        }
        button:hover {
            background-color: #053b30;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['suname']))
        {
            $sid=$_POST['suname'];
            $spass=$_POST['spass'];
        }
    ?>
    <h1>
        <center><img src="assets/student.png" height="22px" width='24px' /> STUDENT LOGIN</center>
    </h1>
    <form action=" " method="post">
        <fieldset>
            <legend>Login</legend>
            <label for="suname"><img src="assets/userid.png" height="11px"width='12px'/> User ID :</label>
            <input type="text" id="suname" name="suname" value="<?php if(isset($sid)) echo $sid; ?>" required><br><br>
            <label for="spass"><img src="assets/pass.png" height="11px"width='12px'/> Password :</label>
            <input type="password" id="spass" name="spass" value="<?php if(isset($spass)) echo $spass; ?>" required/><br><br>
            <button type="submit"><img src="assets/login.png" height="11px"width='12px'/> Login</button>
            <button type="button" onclick="window.location.href='index.php'"><img src="assets/back.png" height="11px"width='12px'/> Back</button>
        </fieldset>
    </form>
    <?php
        if(isset($_POST['suname']))
        {
            $sid=$_POST['suname'];
            $spass=$_POST['spass'];  
            $sql = "SELECT userid, password FROM password WHERE userid=$sid ";
            $res=$conn->query($sql);
            $row=$res->fetch_assoc();
            if($res->num_rows==0)
                echo "<center>Invalid User Id</center>";
            else 
            {
                if($spass!=$row['password'])
                    echo "<center>Invalid password</center>";
                else
                {
                    $_SESSION['sname']=$sid;
                    $_SESSION['spass']=$spass;
                    header("Location:student.php");
                }
            }
        }
    ?>
</body>
</html> 