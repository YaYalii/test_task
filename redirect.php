<?php
$conn = new mysqli("localhost", "root", "", "urls_db");
if(!empty($_GET['short']))
{
    $short_url = "http://" . $_SERVER["SERVER_NAME"] . "/" . $_GET['short'];
    $url = $conn->query("SELECT long_url FROM urls WHERE short_url = '$short_url'");
    if($url->num_rows == 0)
    {
        header('Location: /',true, 301);
    }
    else
    {
        header('Location: '.$url->fetch_assoc()['long_url'],true, 301);
    }
    exit();
}
$conn->close();
?>
