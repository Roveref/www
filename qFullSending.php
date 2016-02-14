<?php 
  include 'qFunctions.php';

$ClientiP = getIP();

$date = getDateYMDHIS();

$conn = connectDatabase("localhost","root","password29","questionnaire");

$numberColumns = getNumberColumn("questionnaire","general_information", $conn);

registerInTable2("general_information",$_POST, $date, $ClientiP, $numberColumns, $conn);

disconnectDatabase($conn);

phpInHTML("sex","general");

?>