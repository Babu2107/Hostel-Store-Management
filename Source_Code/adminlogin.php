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
    <h1>
        <center><img src="assets/admin.png" height="22px" width='24px' /> ADMIN LOGIN</center>
    </h1>
    <?php
        if(isset($_POST['auname']))
        {
            $auname=$_POST['auname'];
            $apass=$_POST['apass'];
        }
    ?>
    <form action="" method="POST">
        <fieldset>
            <legend>Login</legend>
            <label for="auname"><img src="assets/adminprofile.png" height="11px"width='12px'/> Admin ID :</label>
            <input type="text" id="auname" name="auname" value="<?php if(isset($auname)) echo $auname; ?>" required/><br><br>
            <label for="apass"><img src="assets/pass.png" height="11px"width='12px'/> Password :</label>
            <input type="password" id="apass" name="apass"minlength="10" maxlength="10" value="<?php if(isset($apass)) echo $apass; ?>" required/><br><br>
            <button type="submit"><img src="assets/login.png" height="11px"width='12px'/> Login</button>
            <button type="button" onclick="window.location.href='index.php'"><img src="assets/back.png" height="11px"width='12px'/> Back</button>
        </fieldset>
    </form>
    <?php
        if(isset($_POST['auname']))
        {
            if($auname!='mitadmin21')
                echo "<center>Invalid Admin Id</center>";
            else 
            {
                if($apass!='mitadmin21')
                    echo "<center>Invalid password</center>";
                else
                {
                    $_SESSION['aname']="mitadmin21";
                    $_SESSION['apass']="mitadmin21";
                    header("Location:admin.php");
                }
            }
        }
    ?>
</body>
</html>