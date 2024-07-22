<?php
  session_start();
  unset($_SESSION['aname']);
  unset($_SESSION['apass']);
  unset($_SESSION['sname']);
  unset($_SESSION['spass']);
  
?>

<!DOCTYPE html>
<html>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<head>
    <title>MIT HOSTELS</title>
    <link rel="icon" href="assets/aulogo.png" type="image/x-icon">
    <style>
        html{
            zoom:150%;
        }
        body {
            background-image: url('assets/STORES.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
        }
        fieldset {
            background-color: #23463f;
            height: 125px;
            width: 150px;
            margin: 0 auto;
            text-align: center;
        }
        legend {
            background-color: #23463f;
            color: white;
            padding: 5px 10px;
            border: solid black;
        }
        form {
            text-align: center;
        }
        button {
            height: 35px;
            width: 85px;
            font-size: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        marquee {
            color: black;
            font-weight: bolder;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <marquee behavior="" direction=""><img src="assets/aulogo.png" height="32px" width='32px' />MIT HOSTEL STORES (Only For Hostellers)</marquee>
    <br><br><br><br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>Login</legend>
        <button onclick="window.location.href='adminlogin.php'"><img src="assets/admin.png" height="11px"width='12px'/> Admin</button><br><br>
        <button onclick="window.location.href='studentlogin.php'"><img src="assets/student.png" height="11px"width='12px'/> Student</button>
    </fieldset>
</body>
<script>
    
    
        Email.send({
          SecureToken: "6f6cf77c-26cd-4fbd-88f0-be0df7252305",
          To: "bmkvs541@gmail.com",
          From: "rcap707000@gmail.com",
          Subject: "HI",
          Body:
            "Test Message",
        }).then((message) => alert("Feedback Sent to admin Successfully"));
    
    </script>
</html>