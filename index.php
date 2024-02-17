<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        :root {
            color: rgb(116, 219, 20);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }
        /* Home page */
        .home {
            display: flex;
            align-items: center;
            justify-content: space-around;
            min-height: 100vh;
            background: url(child_l5.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .home .content {
            max-width: 50rem;
            align-items: center;
            margin-left: 30px
        }

        .home .content h3 {
            font-size: 5rem;
            color: rgb(116, 219, 20);
            align-items: center;
        }

        .home .content span {
            font-size: 3.5rem;
            color: #333;
            padding: 1rem 0;
            line-height: 1.5;
        }

        .home .content p {
            font-size: 1.5rem;
            color: #999;
            padding: 1rem 0;
            line-height: 1.5;
        }

        .btn {
            display: inline-block;
            margin-top: 1rem;
            border-radius: 5rem;
            background: #333;
            color: #fff;
            padding: .9rem 3.5rem;
            cursor: pointer;
            font-size: 1.7rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1)
        }

        .btn:hover {
            background: rgb(116, 219, 20);
        }

        /* about us */
        .about .row {
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
            padding: 2rem 0;
            padding-bottom: 3rem;
        }

        .about .row .video-container {
            flex: 1 1 40rem;
            position: relative;
        }

        .about .row .video-container video {
            width: 100%;
            border: 1.5rem solid #fff;
            border-radius: .5rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            height: 100%;
            object-fit: cover;
        }
        
        .about .row .video-container img {
            width: 100%;
            border: 1.5rem solid #fff;
            border-radius: .5rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            height: 100%;
            object-fit: cover;
        }
        .about .row .video-container h3 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 3rem;
            background: #fff;
            width: 60%;
            padding: 1rem 2rem;
            text-align: center;
            /* mix-blend-mode: screen; */
        }

        .heading {
            text-align: center;
            font-size: 4rem;
            color: #333;
            padding: 1rem;
            margin: 2rem 0;
            background-color: whitesmoke;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        .heading span {
            color: rgb(116, 219, 20);
        }

        .about .row .content {
            flex: 1 1 40rem;
        }

        .about .row .content h3 {
            font-size: 3rem;
            color: #333;
        }

        .about .row .content p {
            font-size: 1.5rem;
            color: #999;
            padding: .5rem 0;
            padding-top: 1rem;
            line-height: 1.5;
        }

        .icons-container {
            background: #eee;
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .icons-container .icons {
            background: #fff;
            border: .1rem solid rgba(0, 0, 0, .1);
            padding: 2rem;
            display: flex;
            align-items: center;
            flex: 1 1 25rem;
        }

        .icons-container .icons img {
            height: 5rem;
            margin-right: 2rem;
        }

        .icons-container .icons h3 {
            color: #333;
            padding-bottom: .5rem;
            font-size: 1.5rem;
        }

        .icons-container .icons span {
            color: #555;
            font-size: 1.3rem;
        }

        .footer .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .footer .box-container .box {
            flex: 1 1 25rem;
        }

        .footer .box-container .box h3 {
            color: #333;
            font-size: 2.5rem;
            padding: 1rem 0;
        }

        .footer .box-container .box a {
            display: block;
            color: #666;
            font-size: 1.5rem;
            padding: 1rem 0;
        }

        .footer .box-container .box a:hover {
            color: rgb(116, 219, 20);
            text-decoration: underline;
        }

        .footer .box-container .box img {
            margin-top: 1rem;
        }

        .footer .credit {
            text-align: center;
            padding: 1.5rem;
            margin-top: 1.5rem;
            padding-top: 2.5rem;
            font-size: 2rem;
            color: #333;
            border-top: .1rem solid rgba(0, 0, 0, .1);
            padding-bottom: 2rem;
        }

        .footer .credit span {
            color: rgb(116, 219, 20);
        }
    </style>
</head>

<body>
    <?php require '_main_nav.php' ?>

    <!-- Home section start -->
    <section class="home" id="home">
        <div class="content">
            <h3>Brighten Their Future</h3>
            <span> Yes to Education..... </span><br>
            <span>No to Child Labour.</span>
            <p>Stop Hammering Their Dreams</p>
            <a href="complaint.php" class="btn">Complaint/Report</a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->
    <section class="about" id="about">
        <h1 class="heading">
            <span> Explore </span> Us
        </h1>
        <div class="row">
            <div class="video-container">
                <video src="animation.mp4"loop autoplay muted></video>
            </div>
            <div class="content">
                <h3>why help to child labour?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque sit nemo pariatur corporis
                    perspiciatis aspernatur a ullam repudiandae autem asperiores quibusdam omnis commodi alias repellat
                    illum, unde optio temporibus.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ea est commodi incidunt magni
                    quia molestias perspiciatis, unde repudiandae quidem.</p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>

        <div class="row">
            <div class="video-container">
                <img src="child_l7.jpg">
                <h3>Donate<form>
                    <script src="https://checkout.razorpay.com/v1/payment-button.js"
                        data-payment_button_id="pl_LRimJJpsVYkDXM" async> </script>
                </form></h3>
            </div>
            <div class="content">
                <h3>why donate?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque sit nemo pariatur corporis
                    perspiciatis aspernatur a ullam repudiandae autem asperiores quibusdam omnis commodi alias repellat
                    illum, unde optio temporibus.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ea est commodi incidunt magni
                    quia molestias perspiciatis, unde repudiandae quidem.</p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <a href = "https://satyarthi.org.in/" target = "_blank">
            <img src="satyarthi.png" alt=""></a>
        </div>

        <div class="icons">
        <a href = "https://wcd.nic.in/" target = "_blank">
            <img src="Women_child.jpeg" alt=""></a>
            <!-- <div class="info">
                <h3>donate </h3>
                <span>give helping hand</span>
            </div> -->
        </div>

        <div class="icons">
        <a href = "" target = "_blank">
            <img src="india_gov.jpeg" alt=""></a>
        </div>

        <div class="icons">
        <a href = "https://satyarthi.org.in/" target = "_blank">
            <img src="labour_emp.jpeg" alt=""></a>
            <!-- <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paypal</span>
            </div> -->
        </div>
    </section>
    <!-- icons section ends -->
    <!-- footer section starts  -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php">Home</a>
                <a href="acts.php">Acts</a>
                <a href="#Media">Media</a>
                <a href="index.php">Explore Us</a>
                <a href="Donation.php">Donate</a>
                <a href="complaint.php">Complaint</a>
                <a href="login.php">Login</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">abc@gmail.com</a>
                <a href="#">Jalgaon, India</a>
                <img src="images/payment.png" alt="">
            </div>

        </div>

        <div class="credit">&copy; created by <span>Ebuddy members</span> | all rights reserved </div>
    </section>
   
</body>
<script>
        let navbar = document.querySelector('.navbar')

        document.querySelector('#menu-bar').onclick = () => {
            navbar.classList.toggle('active');
        }

        document.querySelector('#close').onclick = () => {
            navbar.classList.remove('active');
        }

        window.onscroll = () => {

            navbar.classList.remove('active');

            if (window.scrollY > 100) {
                document.querySelector('header').classList.add('active');
            } else {
                document.querySelector('header').classList.remove('active');
            }

        }

        let themeToggler = document.querySelector('#theme-toggler');

        themeToggler.onclick = () => {
            themeToggler.classList.toggle('fa-sun');
            if (themeToggler.classList.contains('fa-sun')) {
                document.querySelector('body').classList.add('active');
            } else {
                document.querySelector('body').classList.remove('active');
            }
        }
    </script>


</html>