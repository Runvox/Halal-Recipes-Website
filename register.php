<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title>REGISTER</title>
    <style>

        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registerform {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box; 
        }

        input:focus {
            outline: none;
            border-color: orange;
        }

        .registerbutton {
            width: 100%;
            padding: 10px;
            background-color: orange; 
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .registerbutton:hover {
            background-color:rgb(255, 146, 44);
        }

        .submitregister {
            margin-top: 20px;
        }

        .error-message {
            color: red;
            font-size: 12px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="registerform">
        <form id="registerForm" action="registerhandler.php" method="post" onsubmit="return validatePassword()">
            <label for="name"><b>FULL NAME</b></label>
            <input required id="name" type="text" name="name" placeholder="YOUR FULL NAME.."><br><br>

            <label for="email"><b>E-Mail</b></label>
            <input required id="email" type="email" name="email" placeholder="E-MAIL.."><br><br>

            <label for="password"><b>PASSWORD</b></label>
            <input required id="password" type="password" name="password" placeholder="YOUR PASSWORD.."><br><br>

            <label for="confirm-password"><b>REPEAT YOUR PASSWORD</b></label>
            <input required id="confirm-password" type="password" name="confirm-password" placeholder="REPEAT YOUR PASSWORD.."><br><br>

            <div class="error-message" id="passwordError">
                Your password must contain at least a number, a capital letter and a special character.
            </div>
            
            <div class="submitregister">
                <button class="registerbutton" id="registerbutton">PRESS TO REGISTER</button>
            </div>
        </form>
    </div>

    <script>

        function validatePassword() {

            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            const passwordPattern = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*(),.?":{}|<>]).{8,}$/;

            if (!passwordPattern.test(password)) {
                document.getElementById("passwordError").style.display = "block";
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }

            return true;
        }

    </script>

</body>
</html>