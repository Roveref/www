<?php 
  include 'qFunctions.php';

$ClientiP = getIP();

$date = getDateYMDHIS();

$conn = connectDatabase("localhost","root","password29","questionnaire");

$numberColumns = getNumberColumn("questionnaire","general_information", $conn);

registerInTable("general_information",$_POST, $date, $ClientiP, $numberColumns, $conn);

$conn = connectDatabase("localhost","root","password29","questionnaire");

registerInTable("mechanicalpen",$_POST, $date, $ClientiP, $numberColumns, $conn);

disconnectDatabase($conn);

?>