<?php 
  include 'qFunctions.php';

$ClientiP = getIP();

$date = getDateYMDHIS();

//$conn = connectDatabase("localhost", "root", "password29","questionnaire");

$conn = mysqli_connect("localhost", "root", "password29","questionnaire");
if (!$conn) 
    die("<pre>".print_r(mysqli_connect_error(), true));
echo "<p>Connection established.</p>";


$numberColumnsGI = getNumberColumn("questionnaire","general_information", $conn);

$numberColumnsMP = getNumberColumn("questionnaire","mechanicalpen", $conn);

$numberColumnsJW = getNumberColumn("questionnaire","jewel", $conn);


    registerInTable("general_information",$_POST, $date, $ClientiP, $numberColumnsGI, $conn);

array_unshift($_POST, $date);
array_unshift($_POST, $ClientiP);
$sqlGI = "INSERT INTO general_information VALUES (";
$sqlMP = "INSERT INTO mechanicalpen VALUES (";
$sqlJW = "INSERT INTO jewel VALUES (";


$last_key = end(array_keys($_POST));

foreach($_POST as $key => $element)
    {
        
//echo '<p>' . $var . '</p>';
if($key <= $numberColumnsGI-2) 
    {

    if ($key != $last_key AND $key != $numberColumnsGI-2)
        {
        $sqlGI = $sqlGI . "'" . $element . "',";
        }
    else
        {
        $sqlGI = $sqlGI . "'" . $element . "',NULL)";
        }
    }
if($key > $numberColumnsGI-2 AND $key <= $numberColumnsGI+$numberColumnsMP-5) 
    {

            if ($key != $last_key AND $key != $numberColumnsGI-1 AND $key != $numberColumnsGI+$numberColumnsMP-5)
        {
        $sqlMP = $sqlMP . "'" . $element . "',";
        }
        elseif($key == $numberColumnsGI-1)
        {
        $sqlMP = $sqlMP . "'" . $_POST['0'] . "'," . $_POST['1'] . "',";
        }
        elseif($key == $numberColumnsGI+$numberColumnsMP-5)
        {
        $sqlMP = $sqlMP . "'" . $element . "',NULL)";
        }
    }
    if($key > $numberColumnsGI+$numberColumnsMP-5) 
    {
        $var = $numberColumnsGI+$numberColumnsMP-4;
            if ($key != $last_key AND $key != $numberColumnsGI+$numberColumnsMP-4)
        {
        $sqlJW = $sqlJW . "'" . $element . "',";
        }
            elseif($key == $numberColumnsGI+$numberColumnsMP-4)
        {
        $sqlJW = $sqlJW . "'" . $_POST['0'] . "'," . $_POST['1'] . "',";
        }
        elseif($key == $last_key)
        {
        $sqlJW = $sqlJW . "'" . $element . "',NULL)";
        }
    }
    }

disconnectDatabase($conn);

?>