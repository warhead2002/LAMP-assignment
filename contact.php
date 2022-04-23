<!DOCTYPE html>
<html>
    <head>
        <title>Contact Me!</title>
        <style>
            .contactform{font-weight: bold;text-align: center;padding-top: 100px;font-size: larger;}
            .heading{font-weight: bold;text-align: center;font-size: 40px;}
        </style>
    </head>
    <body>
        <div class="heading">Contact Us!</div><br>
        <form class="contactform" method="POST" action="/">
            <a class="text">Name</a><br>
            <input type="text" required name="name"><br>
            <a class="text">Email ID</a><br>
            <input type="text" required name="email"><br>
            <a class="text">Message</a><br>
            <input type="text" required name="message"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>