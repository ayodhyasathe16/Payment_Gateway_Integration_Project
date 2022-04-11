<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'user_payment');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "insert into user (user, email, mobile) values ('$user', '$email', '$mobile')";
$query = "select * from user where user='$user' AND email = '$email'";


$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['user'] === $user && $row['email'] === $email) {
        
        header('location: Home.php');

        exit();

    }else{

        header("Location: index.php?error=Incorect User name or password");
        
        exit();

    }

}else{

    header("Location: index.php?error=Incorect User name or password");

    exit();

}

?>

