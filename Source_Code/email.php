<!DOCTYPE html>
<html>
<head>
  <title>Send Mail</title>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  
  <script type="text/javascript">
    function sendEmail() {
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "babum210704@gmail.com",
        Password: "6470052e-eed4-4af5-a7f8-c1e3f418f450",
        To: 'sumathymohan351@gmail.com',
        From: "babum210704@gmail.com",
        Subject: "Sending Email using JavaScript",
        Body: "Well, that was easy!!",
      })
      .then(function (message) {
        alert("Email sent successfully");
      })
      .catch(function (error) {
        alert("Error sending email: " + error);
      });
    }
  </script>
</head>
  
<body>
  <form method="post">
    <input type="button" value="Send Email" onclick="sendEmail()" />
  </form>
</body>
</html>
