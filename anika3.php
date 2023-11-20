<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.2/css/boxicons.min.css">
    <link rel="stylesheet" href="anika3.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="form">
            <div class="contact-info">
                <h3 class="tittles">Let's get in touch</h3>
                <p class="text">
                Hello, I'am <span class="ss" >Anikah Hossain</span>. A passionate, creative professional freelance Devaloper operating from <span class="d">Bangladesh</span>. Are you looking for a Frontend Devaloper?
                </p>
                <div class="info">
                    <div class="information">
                        <img src="image/location.png" class="icon" alt="">
                        <p>21 North Road, Dhaka-1205</p>
                    </div>
                    <div class="information">
                        <img src="image/email.png" class="icon" alt="">
                        <p>anikahhossen123@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="image/phone.png" class="icon" alt="">
                        <p>0179594...</p>
                    </div>
                </div>
                <div class="social-icone">
                    <a href=""><i class="bx bxl-facebook-circle"></i></a>
                    <a href=""><i class="bx bxl-github"></i></a>
                    <a href=""><i class="bx bxl-instagram"></i></a>
                    <a href=""><i class="bx bxl-whatsapp"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <form action="anika3.html" autocomplete="off">
                    <h3 class="tittle">Send Us A Message</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" name="name"/>
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" name="email"/>
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" name="phone"/>
                        <label for="">Phone Number</label>
                        <span>Phone Number</span>
                    </div>
                    <div class="input-container">
                        <textarea name="message" class="input" name="text"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send Message" class="btn" name="send"/>
                </form>
            </div>
        </div>
    </form>
    </div>
    <script src="anika3.js"></script>
</body>
</html>

<?php
    if($_POST['send'])
    {
        $name      = $_POST['name'];
        $email     = $_POST['email'];
        $num       = $_POST['phone'];
        $textarea  = $_POST['text'];

        $query = "INSERT INTO web3 values('$name','$email','$num','$textarea')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data inserted into Database";
        }
        else
        {
            echo "Faild";
        }
    }
?>