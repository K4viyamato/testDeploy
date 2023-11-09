<html>

<head>
    <link rel="stylesheet" href="./styles.css">
    <title>Login</title>

    <style>
        body {
  height: 100%;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgb(166, 44, 121);
  background: linear-gradient(
    135deg,
    rgba(166, 44, 121, 1) 0%,
    rgba(218, 78, 107, 1) 49%,
    rgba(243, 113, 35, 1) 100%
  );
}

.login-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.login-card {
  padding: 20px;
  border: 1px solid #ccc;
  text-align: center;
  background: rgba(255, 255, 255, 0.22);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(2.6px);
  -webkit-backdrop-filter: blur(2.6px);
  border: 1px solid rgba(255, 255, 255, 0.92);
  color: #fff;
}

form {
  display: flex;
  flex-direction: column;
  padding: 10px 50px;
}

.label {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  margin: 10px 5px;
}

.remember {
  margin-top: 10px;
}

.button {
  display: inline-block;
  padding: 10px 32px;
  border: 0;
  text-decoration: none;
  border-radius: 15px;
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(30px);
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  letter-spacing: 2px;
  cursor: pointer;
  text-transform: uppercase;
}

.button:hover {
  background-color: rgba(255, 255, 255, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255,1);
  transition: all 300ms;
}

    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <form action="server.php" method="post">
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