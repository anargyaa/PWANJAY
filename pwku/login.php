<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Login</title>
</head>
<body>
    <div class="container-login">
        <form action="controller/login-proc.php" method="POST" class="form-login">
            <h2 style="margin: 15px; border-bottom: 2px solid black; letter-spacing: 4px;">Login</h2>
            <div class="login">
            <span>Username: *</span>
            <br>
            <input type="text" name="username" class="input-text"/>
            <br>
            <span>Password: *</span>            
            <br>
            <input type="password" name=" password" class="input-text"/>
            <br>
            <input type="submit" class="submit" name="submit" class="submit">
            </div>
        </form>
    </div>
</body>
</html>