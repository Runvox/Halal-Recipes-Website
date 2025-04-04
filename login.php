<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title>LOGIN</title>
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

        .loginform {
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

        .loginbutton {
            width: 100%;
            padding: 10px;
            background-color: orange; 
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .loginbutton:hover {
            background-color: rgb(255, 146, 44); 
        }


        .submitlogin {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="loginform">
        <form id="loginForm" action="loginhandler.php" method="post" onsubmit="return redirectToHome()">
            <label for="email"><b>E-Mail</b></label>
            <input required id="email" type="text" name="email" placeholder="E-mail.."><br><br>

            <label for="password"><b>Password</b></label>
            <input required id="password" type="password" name="password" placeholder="Your Password.."><br><br>
            
            <div class="submitlogin">
                <button type="submit" class="loginbutton" id="loginbutton">LOGIN</button>
            </div>
        </form>
    </div>

    <script>
        function redirectToHome() {
            event.preventDefault();
            
            window.location.href = "index.html";
        }
    </script>
</body
