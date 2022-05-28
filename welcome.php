<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Fashion blog: FASHION TRENDS, STYLE TIPS, NEW IN COSMETOLOGY</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script>
        var bleep = new Audio();
        bleep.src = "bleep.wav";
    </script>

</head>
<body>
<header>
    <div id="logo" onmousedown="bleep.play()" onclick="slowScroll('#top')">
        <span>NaBi</span>
    </div>
    <div id="about">
        <a href="#" onmousedown="bleep.play()" onclick="slowScroll('#main')" title="About us">About us</a>
        <a href="#" onmousedown="bleep.play()" onclick="slowScroll('#fashion')" title="Fashion">Fashion</a>
        <a href="#" onmousedown="bleep.play()" onclick="slowScroll('#contacts')" title="More News">More News</a>
        <a href="index3.html" onmousedown="bleep.play()"  title="FAQ's">FAQ</a>
        <a href="logout.php">Logout</a>
    </div>
</header>
<script src= "index.js" charset="utf-8"></script>

<div id="top">
    <h1>Each of us has a style -</h1>
    <h3>you just need to find it.</h3>

</div>



<div id="main">
    <div class="intro">
        <h2> This is the place to be if you enjoy keeping up with the latest fashion trends</h2>
    </div>
    <div class="text">
        <span>Fashion blog NaBI is the most relevant and interesting articles about fashion and style. On the fashion portal, you will find a story about fashion houses, get acquainted with all modern clothing brands, learn about the hottest trends.</span>
    </div>
</div>

<div id="fashion">
    <h2>It's a lot easier</h2>
    <h4>when you're with us</h4>

    <div class="img">
        <img src="https://i.pinimg.com/564x/f9/81/0e/f9810eafb6b5ff5daa18d8cdd081845f.jpg" alt="">
        <span>History of Fashion</span>
    </div>

    <div class="img">
        <img src="https://i.pinimg.com/564x/eb/b4/a7/ebb4a7a96526818ec95bb4c5269f8bfa.jpg" alt="">
        <span>Trends</span>
    </div>

    <div class="img">
        <img src="https://i.pinimg.com/564x/56/5f/6e/565f6ef1fb7145c209afa0211b77cb90.jpg" alt="">
        <span>Runways</span>
    </div>

    <div class="img">
        <img src="https://i.pinimg.com/564x/b2/ae/29/b2ae291542c29da94f4448a60be20cbf.jpg" alt="">
        <span>Beauty</span>
    </div>
</div>

<div id="contacts">
    <center><h5>To Get More News</h5></center>
    <form id="form_input">
        <label for="name">Name</label><br>
        <input type="text" placeholder="Enter your Name" name="name" id="name"><br>
        <label for="email">Email</label><br>
        <input type="email" placeholder="Enter your Email" name="email" id="email"><br>
        <div id="mess_send" class="btn">Send</div>
    </form>
</div>

<div class="wrapper">
    <div class="button">
        <div class="icon"><i class="fab fa-facebook-f"></i></div>
        <span>Facebook</span>
    </div>

    <div class="button">
        <div class="icon"><i class="fab fa-instagram"></i></div>
        <span>Instagram</span>
    </div>

    <div class="button">
        <div class="icon"><i class="fab fa-youtube"></i></div>
        <span>YouTube</span>
    </div>

    <div class="button">
        <div class="icon"><i class="fab fa-twitter"></i></div>
        <span>Twitter</span>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function slowScroll(id) {
        $('html,body').animate({
            scrollTop: $(id).offset().top
        }, 500);
    }

    $(document).on("scroll",function () {
        if($(window).scrollTop() === 0)
            $("header").removeClass("fixed");
        else
            $("header").attr("class", "fixed");
    });
</script>
</body>
</html>




