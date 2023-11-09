<?php 
    
    session_start();

    include 'conn.php';
    
    $username = "user";
    $password = "1234";

    if ( $_POST['name'] == $username && $_POST['pwd'] == $password){
        echo "You logged in";
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