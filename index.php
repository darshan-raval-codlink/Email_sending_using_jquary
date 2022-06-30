<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <form action="" onsubmit="emailsend(); reset(); return false;"  >

        <label for="name">Your Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="email">email</label>
        <input type="text" id="email" name="email" placeholder="Your last name..">

        <label for="phoneno">phoneno</label>
        <input type="text" id="phoneno" name="phoneno" placeholder="Your last name..">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <button type="submit">send</button>

    </form>
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
    function emailsend(){
    //  console.log(ok);
    Email.send({
    Host : "smtp.email.com",
    Username : "ravaldarshan237200@gmail.com",
    Password : "raval237200",
    To : 'ravaldarshan23072000@gmail.com',
    From : $('#email').val(),
    Subject : "This is the subject",
    Body : "Name:"+ $('name').val()
        + "<br> Email:" + $('email').val()
        + "<br> Phone no:" + $('Phone').val()
        + "<br> Message:" + $('message').val()
}).then(
  message => alert("message sent succes")
);
    }
</script>

</html>