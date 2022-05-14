<?php



if (($_POST["email"] == "b211210007@sakarya.edu.tr") && ($_POST["sifre"] == "b211210007")) {
    echo "HOŞGELDİN AHMET FURKAN KASAP" . " ";
    header("Refresh: 3; url=http://localhost/index.html");
} else {

    header("location:http://localhost/login.html");
}

?>
