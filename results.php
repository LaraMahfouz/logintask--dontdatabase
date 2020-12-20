<?php                           

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'logintask';

//object orieanted way
$connection = new mysqli($servername,$username,$password,$dbname);

$user_name = $_POST["newname"];
$user_password = $_POST["newpass"];

if(isset($_POST['register'])){
$sql = "INSERT INTO users (username,userpassword) VALUES ('$user_name','$user_password')";

if($connection->query($sql) == TRUE){
    echo 'new record has been created';
}else{
    echo 'error'.$sql.'<br>'. $connection->error;
}}


 ?>

<?php
session_start();
$_SESSION['multiUsers'] = $users = array(
    "lara" => "larapass" ,
    "mohammad" => "mohammadpass",
    "dana" => "danapass",
    "ayham" => "ayhampass",
    "hamzeh" => "hamzehpass",
);
$admin["admin"] = "adminpass";


if($_POST["newuser"] == $_POST["newuser"] && $_POST["newpass"]== $_POST["newpass"]){
         $_POST["newuser"]=$y;
         $_POST["newpass"]=$z;

         $_SESSION['multiUsers'] = $users = array(
            "lara" => "larapass" ,
            "mohammad" => "mohammadpass",
            "dana" => "danapass",
            "ayham" => "ayhampass",
            "hamzeh" => "hamzehpass",

        );

}

foreach ($users as $name => $password) {
    if ($name == $_POST["user"] && $password == $_POST["pass"]) {
        header("Location: userpage.php");
        die();
    }
}
header("Location: index.php");

foreach ($admin as $name => $password) {
    if ($name == $_POST["user"] && $password == $_POST["pass"]) {
        header("Location: adminpage.php");
        die();
    }
}
header("Location: index.php")
?>







