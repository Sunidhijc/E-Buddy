<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <style>
        body {
            align-items: center;
            justify-content: space-around;
            min-height: 100vh;
            background: url(child_l5.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .form {
            margin: 100px auto;
            width: 300px;
            padding: 30px 25px;
            background: white;
        }

        h1.login-title {
            color: #666;
            margin: 0px auto 25px;
            font-size: 25px;
            font-weight: 300;
            text-align: center;
        }

        .login-input {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 25px;
            height: 25px;
            width: calc(100% - 23px);
        }

        .login-input:focus {
            border-color: #6e8095;
            outline: none;
        }

        .login-button {
            color: #fff;
            background: rgb(116, 219, 20);
            border: 0;
            outline: 0;
            width: 100%;
            height: 50px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .link {
            color: #666;
            font-size: 15px;
            text-align: center;
            margin-bottom: 0px;
        }

        .link a {
            color: #666;
        }

        h3 {
            font-weight: normal;
            text-align: center;
        }
    </style>

    <body>
        <?php
        require('db.php');
        session_start();
        // When form submitted, check and create user session.
        if (isset($_POST['mobileno'])) {
            $username = stripslashes($_REQUEST['mobileno']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $create_datetime = date("Y-m-d H:i:s");
            
            // Check user is exist in the database  
            $query    = "INSERT into `users` (username, password, create_datetime)
            VALUES ('$username', '" . md5($password) . "','$create_datetime')";
            $result = mysqli_query($con, $query) or die(mysql_error());
            
             if ($result) {
                 echo "<div class='form'>
                     <h3>You are logged in successfully.</h3><br/>
                    <p class='link'>Now you are ready to avail a <a href='scratch_card.php'>scratch card</a></p>
                     </div>";}    
        }
        ?>
        <?php require '_main_nav.php' ?>
        <form class="form" name="form1" onsubmit="return form()" method="post">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="mobileno" placeholder="Mobile number" autofocus="true" />
            <input type="password" class="login-input" name="password" placeholder="Password" />
            <input type="submit" value="submit" name="submit" class="login-button" />
            <p class="link">Thanks For Helping child labours.</p>
        </form>
        <script>
            function form() {
                var Mobileno =
                    document.forms.form1.mobileno.value;
                var Password =
                    document.forms.form1.password.value;

                if (Mobileno == "" || Password == "") {
                    alert("Empty fields are required.");
                    Mobileno.focus();
                    Password.focus();
                    return false;
                }
                else {
                    alert("This form has been successfully submitted!")
                    alert("Now you are ready to avail a scratch card")
                }

            }
        </script>
    </body>

</html>