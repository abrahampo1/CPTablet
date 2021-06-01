<?
function database($database, $sql){
    $servername = "localhost";
    $database = "$database";
    $username = "root";
    $password = "";
    // Create connection
    $link = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
    $do = mysqli_query($link, $sql);
    return $do;
}
