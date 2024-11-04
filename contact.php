<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-site</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <section>
        <?php include 'header.php'; ?>
    </section>
    <hr>
    <section class="contact-section" data-aos="fade-in">
        <div class="contact-item">
            <hr>
            <h1>Contact Us</h1>
            <p>"Something about us! We have a lot of experience in creating websites and we have services in various
                work related to programming, website design, server management, as well as Graphic Design,"</p>
            <form action="" class="form-contact">
                <input type="username" value="Name" id="userName">
                <input type="email" value="@email" id="email">
                <button onclick="alertMesssage()">Submit</button>
            </form>
            <hr>
            <!-- <div class="btn-login">
                <a href=""><button>Learnmore</button></a>
                <a href=""><button id="login-contact">Login</button></a>
            </div> -->
        </div>
        <img src="https://img.freepik.com/free-vector/abstract-creative-website-hosting-illustration_23-2149225963.jpg?t=st=1711022418~exp=1711026018~hmac=9c1b5c348a5f73cf0eb95c38e738114a64e5e9e04b51e5e92ca55debadb26691&w=740"
            alt="">
    </section>
    <section class="contact-footer">
        <h1>Follow Us</h1>
        <div class="footer-item">
            <a href="">
                <h1>Ka ZaKi</h1>
            </a>
            <div>
                <a href="https://github.com/KakkadaChroy/chroykakkada-app-web" target="_blank"><i
                        class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/kack.gaming.9" target="_blank"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="https://www.tiktok.com/creator-center/upload?from=upload" target="_blank"><i
                        class="fa-brands fa-tiktok"></i></a>
                <a href="https://discord.gg/9p4SAbu6dd" target="_blank"><i class="fa-brands fa-discord"></i></a>
            </div>
            <p>How we Work</p>
            <p>We Did</p>
            <p>We Work Hard</p>
        </div>
        <hr>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./index.js"></script>
</body>

</html>