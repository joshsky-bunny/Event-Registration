<?php
$host = "localhost";
$db   = "eventreg";
$user = "root";
$pass = "";

$showMessage = true;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($showMessage){
        echo "
        <script>
            alert('Database Connected Successfully!');
        </script>
        ";
    }
    
} catch(PDOException $e) {

    echo "
    <script>
        alert('Connection Failed: " . $e->getMessage() . "');
    </script>
    ";
}
?>