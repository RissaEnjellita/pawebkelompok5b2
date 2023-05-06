<?php
require "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/kontak.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolibsite</title>

    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <!-- <p><b>Hello, </b><span id='hello' style="font-weight: 600;"></span></p>     -->
                <p><b>ABSLT STUDIO</b></p>
                <a href="customer.php">Book Now</a>
                <a href="kontak.php"><b>Contact Us</b></a>
                <a href="portofolio.php">Portofolio</a>
                <a href="about.php">About us</a>
                <a href="webphoto.php">Home</a>
                <a href="logout.php">Logout</a>
                <br> 
            </div>
            <div class="content">
                <h1>Kontak Kami</h1>
                <form id="contact-form" method="post" action="send.php">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" required></textarea>
                    <a href="" onclick="kirim()" type="submit">Send</a>
                </form>
    
            </div>
            <footer>
                <b>ABSLT STUDIO</b></a>
                <br>
                <p id="slogan">REDEFINING MOMENTS</p>
                <br>
                <p id="kontak"><b>Found us</b></p>
                <br>
                
                    <a href="https://instagram.com/indrabna?igshid=OGQ2MjdiOTE=" target="_blank" ><img src="img/ig.png"></a>  
                    <a href=""><img src="img/yt.png"></a>
                    <br><br>
                    <div class="copy">
                        <p><b>&copy; 2023 Abslt Studios. All rights reserved.</b></p>
                    </div>
                </footer>
        </div>
    </body>
    <script src="../js/kontak.js"></script>
</html>