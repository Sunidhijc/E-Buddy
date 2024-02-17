<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>navbar</title>
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

        /* navbar */
        html {
            font-size: 62.5%;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 2rem 9%;
            display: flex;
            justify-content: space-between;
            z-index: 1000;
        }

        header .logo {
            font-size: 3rem;
            color: black;
            font-weight: bolder;
        }

        header .logo span {
            color: rgb(116, 219, 20);
            font-size: 30px;
        }

        header .navbar a {
            font-size: 2rem;
            padding: 0 1.5rem;
            color: black;
            text-decoration: none;
            align-items: right;
        }

        header .navbar a:hover {
            color: rgb(116, 219, 20);
            background-color: whitesmoke;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);

        }

        header #toggler {
            display: none;
        }

        header .fa-bars {
            font-size: 3rem;
            color: #333;
            border-radius: .5rem;
            padding: .5rem 1.5rem;
            cursor: pointer;
            border: .1rem solid rgba(0, 0, 0, .3);
            display: none;
        }

        .dropbtn {
            background-color: rgb(181, 245, 122);
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: rgb(116, 219, 20);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        /* media queries  */
        @media (max-width:991px) {

            html {
                font-size: 55%;
            }

            header {
                padding: 2rem;
            }

            section {
                padding: 2rem;
            }

            .home {
                background-position: left;
            }

        }

        @media (max-width:768px) {

            header .fa-bars {
                display: block;
            }

            header .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #eee;
                border-top: .1rem solid rgba(0, 0, 0, .1);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }

            header #toggler:checked~.navbar {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
            }

            header .navbar a {
                margin: 1.5rem;
                padding: 1.5rem;
                background: #fff;
                border: .1rem solid rgba(0, 0, 0, .1);
                display: block;
            }
        }

        @media (max-width:450px) {

            html {
                font-size: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="fas fa-bars"></label>
            <a href="#" class="logo"><span>E</span>buddy</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="Acts.php">Acts</a>
                <a href="#Media">Media</a>
                <a href="index.php">Explore Us</a>
                <a href="https://rzp.io/i/CxRO76q" target="blank">Donate</a>
                <a href="Complaint.php">Complaint</a>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn" >Login</button>
                     <div id="myDropdown" class="dropdown-content">
                        <span><a href="login.php">Login</a></span>
                     <!-- <a href="registration.php">Register</a>  -->
                    </div>
                </div>
                <script>
                    /* When the user clicks on the button, 
                    toggle between hiding and showing the dropdown content */
                     function myFunction() {
                         document.getElementById("myDropdown").classList.toggle("show");
                     }

                    // // Close the dropdown if the user clicks outside of it
                     window.onclick = function (event) {
                         if (!event.target.matches('.dropbtn')) {
                             var dropdowns = document.getElementsByClassName("dropdown-content");
                             var i;
                             for (i = 0; i < dropdowns.length; i++) {
                                 var openDropdown = dropdowns[i];
                                 if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                 }
                             }
                         }
                     }
                </script>
            </nav>
        </header>
    </div>
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
</body>

</html>