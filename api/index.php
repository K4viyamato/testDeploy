<html>

<head>
    
    <title>Login</title>

    <style>
    <?php include 'styles.css'; ?>
    </style>

</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <form action="/api/server.php" method="post">
                <h1>EUC Portal 2023</h1>
                <div class="label">
                    <label for="name">First Name : </label>
                    <input type="text" name="name" value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>">
                </div>
                <div class="label">
                    <label for="pwd">Password : </label>
                    <input type="password" name="pwd" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>">
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember"> Remember me <br><br>
                    <input class="button" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>