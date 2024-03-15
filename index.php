<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js; script.js"></script>
</head>
<body>
<form name="form" id="form" method="get">
    Введите URL:<br>
    <input id="input_url" name="input_url">
    <input type="submit" value="Отправить">
</form>
</body>
<?php
if(!empty($_GET["input_url"]))
{
    $conn = new mysqli("localhost", "root", "", "urls_db");
    $long_url = $_GET['input_url'];
    $table_url = $conn->query("SELECT * FROM urls 
         WHERE `long_url` = '$long_url'");
    $unique_flag = false;
    if($table_url->num_rows > 0)
    {
        $unique_flag = true;
        $short_url = $table_url->fetch_assoc()["short_url"];
    }
    else
    {
        $short_url = "http://" . $_SERVER['SERVER_NAME'] . "/"
            . bin2hex(openssl_random_pseudo_bytes(7));
        $add_url_db = "INSERT INTO urls (long_url,short_url) VALUES('$long_url','$short_url')";
        $conn->query($add_url_db);
    }
    echo $short_url;
    $conn->close();
}
else echo "Введите url";
?>

