<?php

function getIP()
    {
    $ip = $_SERVER['SERVER_ADDR'];
    if (PHP_OS == 'WINNT')
        {
        $ip = getHostByName(getHostName());
        }

    if (PHP_OS == 'Linux')
        {
        $command = "/sbin/ifconfig";
        exec($command, $output);

        // var_dump($output);

        $pattern = '/inet addr:?([^ ]+)/';
        $ip = array();
        foreach($output as $key => $subject)
            {
            $result = preg_match_all($pattern, $subject, $subpattern);
            if ($result == 1)
                {
                if ($subpattern[1][0] != "127.0.0.1") $ip = $subpattern[1][0];
                }
            }
        }

    return $ip;
    }

$ClientiP = getIP();
$server = "localhost";
$date = date('Y-m-d H:i:s');
$options = array(
    "UID" => "root",
    "PWD" => "password29",
    "DB" => "questionnaire"
);
echo "<p>Trying to access the database...</p>";
$conn = mysqli_connect($server, "root", "password29", "questionnaire");

if (!$conn) die("<pre>" . print_r(mysqli_connect_error() , true));
echo "<p>Connection established.</p>";

$sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'questionnaire' AND table_name = 'testdatabase'";

$query = mysqli_query($conn, $sql);

$assoc = mysqli_fetch_assoc($query);

$numberColumns = $assoc['COUNT(*)'];

$sql = "SELECT * FROM testdatabase";
$query = mysqli_query($conn, $sql);

if (!$query)
    {
    exit("<pre>" . print_r(mysqli_error($query) , true));
    }

array_unshift($_POST, $date);
array_unshift($_POST, $ClientiP);
$sql = "INSERT INTO testdatabase VALUES (";
$last_key = end(array_keys($_POST));

foreach($_POST as $key => $element)
    {
    if ($key == '0')
        {
        //$key = 'general_ip';
        $sql = $sql . "'" . $element . "',";
        }
    elseif ($key == '1')
        {
        //$key = 'general_date';
        $sql = $sql . "'" . $element . "',";
        }
    elseif ($key == $last_key)
        {
        $sql = $sql . "'" . $element . "',NULL)";
        }
      else
        {
        $sql = $sql . "'" . $element . "',";
        }
    }

echo $sql;
$query = mysqli_query($conn, $sql);

if (!$query)
    {
    exit("<pre>" . print_r(mysqli_error($query) , true));
    }
  else
    {
    echo "<p>Results of the questionnaire added successfully to the database.</p>";
    }

mysqli_close($conn);
echo "<p>Connection closed.</p>";
?>