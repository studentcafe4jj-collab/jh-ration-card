<?php session_start(); ?>
<h2>Dashboard</h2>
<a href="print-card.php">Print Card</a><br><br>
<h3>Print History</h3>
<?php
include 'config/db.php';
$uid=$_SESSION['uid'];
$q=$conn->query("SELECT * FROM cards WHERE user_id=$uid");
while($r=$q->fetch_assoc()){
echo "<a href='pdf/generated_pdfs/".$r['pdf_file']."' target='_blank'>".$r['pdf_file']."</a><br>";
}
?>
<a href="logout.php">Logout</a>
