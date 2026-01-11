<?php
session_start();
include 'config/db.php';
$uid=$_SESSION['uid'];
$pdf="card_".time().".pdf";
$conn->query("INSERT INTO cards(user_id,ration_no,holder_hindi,holder_eng,district,pdf_file)
VALUES($uid,'$_POST[ration]','$_POST[hindi]','$_POST[eng]','$_POST[district]','$pdf')");
file_put_contents("pdf/generated_pdfs/".$pdf,"PDF CONTENT");
header("location:dashboard.php");
?>