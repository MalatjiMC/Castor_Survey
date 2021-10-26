<?php

$conn = mysqli_connect("localhost", "root", "", "mahlatse");
error_reporting(0);
if (isset($_POST['submit'])) {
    $surname = $_POST['surname'];
    $firstnames = $_POST['name'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $age = $_POST['age'];
    $pizza = $_POST['pizza'];
    $pasta = $_POST['pasta'];
    $pap = $_POST['pap'];
    $chicken = $_POST['chicken'];
    $beef = $_POST['beef'];
    $other = $_POST['other'];
    $eatout = $_POST['eatout'];
    $movies = $_POST['movies'];
    $watchtv = $_POST['watchtv'];
    $radio = $_POST['radio'];

    $Errormessage[] = "";
    $count = 0;


    if ($age < 5 || $age > 120) {
        $count++;
        $Errormessage = "age must be between 5 and 120";
    }
    $sql = "insert into survey values('','$surname','$firstnames','$contact','$date','$age','$pizza','$pasta','$pap','$chicken','$beef','$other','$eatout','$movies','$watchtv','$radio')";

    $result = mysqli_query($conn, $sql);

    if ($result && $count = 0) {
        echo "Not saved";
        
    } else {
        echo "saved";
        
    }
}
mysqli_close($conn);

