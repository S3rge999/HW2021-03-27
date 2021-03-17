<?php   
// echo $_POST["degree"]."<br>";
if ($_POST["e-mail"]=="root" && $_POST["password"]=="123")
{
    header("Location: http://www.nfu.edu.tw");
}
else
{
    header("Location: index.html");
}
?>