<?php
require('db.php');

if (isset($_REQUEST['Name'])) {
    $Name = $_REQUEST['Name'];
    $Description = $_REQUEST['Description'];
    $Occupation = $_REQUEST['Occupation'];
    $Photo = $_REQUEST['Photo'];
    $State = $_REQUEST['State'];
    $Address = $_REQUEST['Address'];
    $PName = $_REQUEST['PName'];
    $Mobileno = $_REQUEST['Mobileno'];
    $Email = $_REQUEST['Email'];
    $create_datetime = date("Y-m-d H:i:s");

    $query = "INSERT INTO `complaint_form`(`childname`, `description`, `occupation`, `photo`, `state`, `address`, `personname`, `mobileno`, `email`, `create_datetime`)
    VALUES ('$Name','$Description','$Occupation','$Photo','$State','$Address','$PName','$Mobileno','$Email','$create_datetime')";
    $result   = mysqli_query($con, $query);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>complaint</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Poppins:wght@400;500;600&display=swap');

        body {

            background: url(child_l5.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            max-width: 550px;
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            background: #fff;
            padding: 10px 25px 3px;
            border-radius: 10px;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            margin-top: 75px;
        }

        #mainCaptcha {
            position: relative;
            max-width: 375px;
            /* margin: auto; */
            margin: 20px;
            padding: 15px;
            user-select: none;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 139, 253, 0.25);

        }

        #refresh {
            position: relative;
            left: 320px;
            width: 30px;
            height: 22px;
            bottom: 50px;
            background-color: transparent;
            outline: none;
            background-image: url('https://img.icons8.com/android/24/000000/refresh.png');
            border: 0;
            background-repeat: no-repeat;
        }

        #txtInput,
        #Button1 {
            position: relative;
            left: 35px;
            padding: 0px 10px;
            bottom: 40px;
            font-size: 18px;
        }

        #txtInput {
            border: 2px solid rgb(4, 82, 160);
        }

        #Button1 {
            background-color: rgb(7, 59, 115);
            border-color: rgb(7, 59, 115);
            color: #fff;

        }

        @media (max-width: 506px) {
            body {
                padding: 0 10px;
            }

            .wrapper {
                padding: 22px 25px 35px;
            }
        }
    </style>
</head>

<body>
    <?php require '_main_nav.php' ?>

    <form name="complaintForm" id="complaintForm" onsubmit="return complaint()" method="post">
        <div class="wrapper mb-2" style="border:2px solid black">
            <h1 style="text-align: center; color: rgb(116, 219, 20);">COMPLAINT FORM</h1>
            <h4><b>Child labour/Adolescent child Details</b></h4>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Child Name</span>
                </div>
                <input type="text" name="Name" class="form-control" placeholder="if available" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Description</span>
                </div>
                <textarea class="form-control" name="Description" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">18 Occupations for detecting child
                        labour</label>
                </div>
                <select class="custom-select" name="Occupation" id="inputGroupSelect01">
                    <option value="Selectoccupation">choose..</option>
                    <option value="1">(1) Transport of passenger, goods or mails by railway</option>
                    <option value="2">(2) Cinder picking, clearing of an ash pit or building operation in the railway
                        premises</option>
                    <option value="3">(3) Work in, catering establishment at a railway station, involving the movement
                        of a vendor or any other employee of the establishment from one platform to
                        aother or into or out of a moving train</option>
                    <option value="4">(4) Work relating to the construction of a railway station or with any other work
                        where such work is done in close proximity to or between the railway lines</option>
                    <option value="5">(5) A port authority within the limits of any port</option>
                    <option value ="6">(6) Work relating to selling of crackers and fireworks in shops with temporary
                        licences</option>
                    <option value="7">(7) Abattoirs/slaughter Houses</option>
                    <option value="8">(8) Automobile workshop and garages</option>
                    <option value="9">(9) Foundries</option>
                    <option value="10">(10) Handling of toxic or inflammable substances or explosives</option>
                    <option value="11">(11) Handloom and powerloom industry </option>
                    <option value="12">(12) Mines (underground and underwater) and collieries</option>
                    <option value="13">(13) Plastic units and fibreglass workshops</option>
                    <option value="14">(14) Employment of children as domestic workers or servants</option>
                    <option value="15">(15) Employment of children in dhabas (road side eateries), restaurants, hotels,
                        motels, tea shops, resorts, spas or other recreational centres</option>
                    <option value="16">(16) Diving</option>
                    <option value="17">(17) Cirucs</option>
                    <option value="18">(18) Caring of Elephants</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload photo</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="Photo" class="form-control" id="customFile" />
                    <label class="form-label" for="customFile"></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">State</label>
                </div>
                <select class="custom-select" name="State" id="inputGroupSelect01">
                    <option value="SelectState">choose..</option>
                    <option value="Andra Pradesh">Andra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madya Pradesh">Madya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadeep">Lakshadeep</option>
                    <option value="Pondicherry">Pondicherry</option>
                </select>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Address</span>
                </div>
                <textarea class="form-control" name="Address" aria-label="With textarea"></textarea>
            </div>
            <hr style="border:1px solid black">
            <h4><b>Reporting person Details</b></h4>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name of the reporting person</span>
                </div>
                <input type="text" name="PName" class="form-control" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Mobile no.</span>
                </div>
                <input type="text" name="Mobileno" class="form-control" placeholder = "+91 " aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email address</span>
                </div>
                <input type="text" name="Email" class="form-control" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <hr style="border:1px solid black">
            <h4><b>Captcha verification</b></h4>

            <body onload="Captcha();">
                <div class="capt m">
                    <h4 type="text" id="mainCaptcha"></h4>
                    <p><input type="button" id="refresh" onclick="Captcha();" /></p> <input type="text" id="txtInput" />
                    <input id="Button1" type="button" value="Check" onclick="alert(ValidateCaptcha());" />
                </div>
            </body>
            <hr style="border:1px solid black">
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-primary" onclick="rset()" type="reset" value="Reset">
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script>
        function Captcha() {
            var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
                '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
            var i;
            for (i = 0; i < 6; i++) {
                var a = alpha[Math.floor(Math.random() * alpha.length)];
                var b = alpha[Math.floor(Math.random() * alpha.length)];
                var c = alpha[Math.floor(Math.random() * alpha.length)];
                var d = alpha[Math.floor(Math.random() * alpha.length)];
                var e = alpha[Math.floor(Math.random() * alpha.length)];
                var f = alpha[Math.floor(Math.random() * alpha.length)];
                var g = alpha[Math.floor(Math.random() * alpha.length)];
            }
            var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
            document.getElementById("mainCaptcha").innerHTML = code
            document.getElementById("mainCaptcha").value = code
        }
        function ValidateCaptcha() {
            var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
            var string2 = removeSpaces(document.getElementById('txtInput').value);
            if (string1 == string2) {
                return false;
            } else {
                return true;
            }
        }
        function removeSpaces(string) {
            return string.split(' ').join('');
        }
    </script>
    <script>
        function complaint() {
            var cname =
                document.forms.complaintForm.Name.value;
            var Desc =
                document.forms.complaintForm.Description.value;
            var Occupation =
                document.forms.complaintForm.Occupation.value;
            var photo =
                document.forms.complaintForm.Photo.value;
            var state =
                document.forms.complaintForm.State.value;
            var address =
                document.forms.complaintForm.Address.value;
            var pname =
                document.forms.complaintForm.PName.value;
            var Mno =
                document.forms.complaintForm.Mobileno.value;
            var email =
                document.forms.complaintForm.Email.value;


            if (pname == "" || Desc == ""||Occupation=="") {
                alert("Empty fields are required.");
                pname.focus();
                Desc.focus();
                return false;
            }
            else if (Mno == "" && Mno.length < 10) {
                alert("Please enter valid phone number.");
                Mno.focus();
                return false;
            }

            else {
                alert("This form has been successfully submitted!")
                alert("You will be notified about further procedure soon.\nThank you for your contribution.")
            }

        }
        function rset() {
            document.getElementById("complaintForm").reset();
        }
    </script>
</body>
</html>