<?php 

    function getIP() {
    $ip = $_SERVER['SERVER_ADDR'];

    if (PHP_OS == 'WINNT'){
        $ip = getHostByName(getHostName());
    }

    if (PHP_OS == 'Linux'){
        $command="/sbin/ifconfig";
        exec($command, $output);
        // var_dump($output);
        $pattern = '/inet addr:?([^ ]+)/';

        $ip = array();
        foreach ($output as $key => $subject) {
            $result = preg_match_all($pattern, $subject, $subpattern);
            if ($result == 1) {
                if ($subpattern[1][0] != "127.0.0.1")
                $ip = $subpattern[1][0];
            }
        //var_dump($subpattern);
        }
    }
    return $ip;
}

$ClientiP = getIP();

$server = "localhost";

$date = date('Y-m-d H:i:s');

$options = array("UID" => "root",  "PWD" => "password29", "DB" => "questionnaire");

echo "<p>Trying to access the database...</p>";

$conn = mysqli_connect($server, "root", "password29","questionnaire");

if (!$conn) 
	die("<pre>".print_r(mysqli_connect_error(), true));

echo "<p>Connection established.</p>";

$sql = "SELECT * FROM testdatabase";

$query = mysqli_query($conn, $sql);

if (!$query){  
	exit("<pre>".print_r(mysqli_error($query), true));
}

//$query->free();
array_unshift($_POST, $date);

array_unshift($_POST, $ClientiP);

$sql = "INSERT INTO testdatabase VALUES (";

foreach($_POST as $cle => $element)
{
    if($cle == '0')
        {  
            $cle = 'general_ip';
                $sql = $sql . "'" . $element . "',";

}
elseif ($cle == '1') {
    $cle = 'general_date';
        $sql = $sql . "'" . $element . "',";

}
    else{
    $sql = $sql . "'" . $element . "',NULL)";
    }
}
//echo $_POST['general_sex'];
//echo $_POST[0];
//echo $date;
//echo $ClientiP;

echo $sql;

//$sql = "INSERT INTO testdatabase (general_ip, general_date, general_sex) VALUES ('$ClientiP', '$date', '{$_POST['general_sex']}')";



$query = mysqli_query($conn, $sql);
if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
		echo "<p>Results of the questionnaire added successfully to the database.</p>";
}

//mysqli_stmt($query);

mysqli_close($conn);

echo "<p>Connection closed.</p>";


?>