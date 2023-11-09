<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
    
    session_start();

    include 'conn.php';
    
    $username = "user";
    $password = "1234";

    if ( $_POST['name'] == $username && $_POST['pwd'] == $password){
        echo "<h1>You logged in</h1>";
        $_SESSION['username'] = $_POST['name'];
    } else {
        die("incorrect password");
    }
    
    if(isset($_POST['remember'])){
        setCookie("username", $_POST['name'], time()+86400);
        setCookie("password",  $_POST['pwd'], time()+86400);
    }

    echo "<br><a href='logout.php'>Logout</a><br>";

    $sql = 'SELECT * FROM users';
    $result = $conn->query($sql);  
    
    if ($result->num_rows > 0){  
        while($row = $result->fetch_assoc()){  
?>

        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>username</th>
            </tr>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['username'] ?></td>
            </tr>
        
        </table>

<?php 
        }
    }
    $conn->close    ();
    
?>
    
</body>
</html>