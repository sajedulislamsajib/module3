<?php
//create and use a session
// session_start();
// $_SESSION['username'] = 'JohnDoe';
// echo $_SESSION['username'];

//destroy a session
// session_unset();//unset all variables
// session_destroy();//destroy the session
// echo $_SESSION['username'];

session_start();
$_SESSION['username']= 'sajib';
$_SESSION['user_id'] = 1234;

echo "Session variables are set.\n";

if(isset($_SESSION['username'])){
    echo "Username: ".$_SESSION['username']."\n";
    echo "User ID: ".$_SESSION['user_id']."\n";
}
else{
    echo "No session found.";
}

session_unset();
session_destroy();
echo "Session destroy successfully.";