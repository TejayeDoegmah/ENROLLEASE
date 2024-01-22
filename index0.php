<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <img src="images\img-3.jpeg">
        <form name="from" action="login_from_index.php" onsubmit="return invalid()" method="POST">
            <label>Username: </label>
            <input type="text" placeholder="Email or Phone" id="user" name="user"/><br/><br/>
            <label>Password: </label>
            <input type="password" placeholder="Password" id="pass" name="pass"/><br/><br/>
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
    <script>
        function invalid() {
            var user = document.from.user.value;
            var pass = document.from.pass.value;
            
            if (user.length == "" && pass.length == "") {
                alert("Username and password fields are empty!!!");
                return false;
            } else {  
                if (user.length == "") {
                    alert("Username is empty!!!");
                    return false;
                }
                if (pass.length == "") {
                    alert("Password is empty!!!");
                    return false;
                }  
            }
        }
    </script>
</body>
</html>
