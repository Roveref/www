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

$sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'questionnaire' AND table_name = 'general_information'";
$query = mysqli_query($conn, $sql);
$assoc = mysqli_fetch_assoc($query);
$numberColumnsGI = $assoc['COUNT(*)'];
echo $numberColumnsGI;
$sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'questionnaire' AND table_name = 'mechanicalpen'";
$query = mysqli_query($conn, $sql);
$assoc = mysqli_fetch_assoc($query);
$numberColumnsMP = $assoc['COUNT(*)'];
echo $numberColumnsMP;
$sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'questionnaire' AND table_name = 'jewel'";
$query = mysqli_query($conn, $sql);
$assoc = mysqli_fetch_assoc($query);
$numberColumnsJW = $assoc['COUNT(*)'];
echo $numberColumnsJW;

$sql = "SELECT * FROM general_information";
$query = mysqli_query($conn, $sql);

if (!$query)
    {
    exit("<pre>" . print_r(mysqli_error($query) , true));
    }

array_unshift($_POST, $date);
array_unshift($_POST, $ClientiP);
$sqlGI = "INSERT INTO general_information VALUES (";
$sqlMP = "INSERT INTO mechanicalpen VALUES (";
$sqlJW = "INSERT INTO jewel VALUES (";

echo $sqlGI;
echo $sqlMP;
echo $sqlJW;

$last_key = end(array_keys($_POST));

echo $last_key;

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
        echo $key;
        echo $var;
            if ($key != $last_key AND $key != $numberColumnsGI+$numberColumnsMP-4)
        {
        $sqlJW = $sqlJW . "'" . $element . "',";
        }
            elseif($key == $numberColumnsGI+$numberColumnsMP-4)
        {
            echo 'yes';
        $sqlJW = $sqlJW . "'" . $_POST['0'] . "'," . $_POST['1'] . "',";
        }
        elseif($key == $last_key)
        {
        $sqlJW = $sqlJW . "'" . $element . "',NULL)";
        }
    }
    }


echo '<p>' . $sqlGI . '</p>';
echo '<p>' . $sqlMP . '</p>';
echo '<p>' . $sqlJW . '</p>';

$query = mysqli_query($conn, $sqlGI);

if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
        echo "<p>Results of the general part added successfully to the database.</p>";
}

$query = mysqli_query($conn, $sqlMP);

if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
        echo "<p>Results of the mechical pen part added successfully to the database.</p>";
}

$query = mysqli_query($conn, $sqlJW);

if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
        echo "<p>Results of the intermediate jewel part added successfully to the database.</p>";
}

mysqli_close($conn);

echo "<p>Connection closed.</p>";

?>