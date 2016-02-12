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

$sql = "SELECT * FROM general_information";

$query = mysqli_query($conn, $sql);

if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}

//$query->free();

echo "test";

$sql = "INSERT INTO general_information (Ip,
datecompletion, 
sex,
age,
country,
city,
newspaper,
newspaper_support,
newspaper_section,
radio,
radio_support,
radio_section,
television,
television_support,
television_section,
magazine,
magazine_support,
magazine_section,
internet,
internet_support,
internet_section,
cinema,
cinema_support,
cinema_section,
videogame,
videogame_support,
videogame_section, 
language, 
mainlanguage,
ratiolanguage1, 
ratiolanguage2, 
mostdelightful
) VALUES ('$ClientiP',
'$date', 
'{$_POST['general_sex']}',
'{$_POST['general_age']}',
'{$_POST['general_country']}',
'{$_POST['general_city']}',
'{$_POST['general_newspaper']}',
'{$_POST['general_newspaper_support']}',
'{$_POST['general_newspaper_section']}',
'{$_POST['general_radio']}',
'{$_POST['general_radio_support']}',
'{$_POST['general_radio_section']}',
'{$_POST['general_television']}',
'{$_POST['general_television_support']}',
'{$_POST['general_television_section']}',
'{$_POST['general_magazine']}',
'{$_POST['general_magazine_support']}',
'{$_POST['general_magazine_section']}',
'{$_POST['general_internet']}',
'{$_POST['general_internet_support']}',
'{$_POST['general_internet_section']}',
'{$_POST['general_cinema']}',
'{$_POST['general_cinema_support']}',
'{$_POST['general_cinema_section']}',
'{$_POST['general_videogame']}',
'{$_POST['general_videogame_support']}',
'{$_POST['general_videogame_section']}',
'{$_POST['general_language']}',
'{$_POST['general_mainlanguage']}',
'{$_POST['general_ratiolanguage1']}',
'{$_POST['general_ratiolanguage2']}',
'{$_POST['general_mostdelightful']}'
)";

$query = mysqli_query($conn, $sql);
if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
        echo "<p>Results of the general part added successfully to the database.</p>";
}

$sql = "SELECT * FROM mechanicalpen";

$query = mysqli_query($conn, $sql);

if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}

$sql = "INSERT INTO mechanicalpen (Ip,
datecompletion, 
frequency,
newspaper,
newspaper_support,
radio,
radio_support,
television,
television_support,
magazine,
magazine_support,
internet,
internet_support,
cinema,
cinema_support,
videogame,
videogame_support,
wordofmouth,
wordofmouth_support,
property1,
property2,
property3,
expectation1,
expectation2,
expectation3,
comfortable, 
origin,
production, 
ecology,
buyinternet,
reason,
timeacceptable,
elasticity,
personalization,
needs
) VALUES ('$ClientiP',
'$date', 
'{$_POST['mechanicalpen_frequency']}',
'{$_POST['mechanicalpen_newspaper']}',
'{$_POST['mechanicalpen_newspaper_support']}',
'{$_POST['mechanicalpen_radio']}',
'{$_POST['mechanicalpen_radio_support']}',
'{$_POST['mechanicalpen_television']}',
'{$_POST['mechanicalpen_television_support']}',
'{$_POST['mechanicalpen_magazine']}',
'{$_POST['mechanicalpen_magazine_support']}',
'{$_POST['mechanicalpen_internet']}',
'{$_POST['mechanicalpen_internet_support']}',
'{$_POST['mechanicalpen_cinema']}',
'{$_POST['mechanicalpen_cinema_support']}',
'{$_POST['mechanicalpen_videogame']}',
'{$_POST['mechanicalpen_videogame_support']}',
'{$_POST['mechanicalpen_wordofmouth']}',
'{$_POST['mechanicalpen_wordofmouth_support']}',
'{$_POST['mechanicalpen_property1']}',
'{$_POST['mechanicalpen_property2']}',
'{$_POST['mechanicalpen_property3']}',
'{$_POST['mechanicalpen_expectation1']}',
'{$_POST['mechanicalpen_expectation2']}',
'{$_POST['mechanicalpen_expectation3']}',
'{$_POST['mechanicalpen_checkbox_comfortable']}',
'{$_POST['mechanicalpen_checkbox_origin']}',
'{$_POST['mechanicalpen_checkbox_production']}',
'{$_POST['mechanicalpen_checkbox_ecology']}',
'{$_POST['mechanicalpen_buyinternet']}',
'{$_POST['mechanicalpen_notbuyinternet_reason']}',
'{$_POST['mechanicalpen_delivery_timeacceptable']}',
'{$_POST['mechanicalpen_checkbox_elasticity']}',
'{$_POST['mechanicalpen_checkbox_personalization']}',
'{$_POST['mechanicalpen_checkbox_needs']}'
)";

$query = mysqli_query($conn, $sql);
if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
        echo "<p>Results of the mechinal pen part added successfully to the database.</p>";
}

$sql = "SELECT * FROM jewel";

$query = mysqli_query($conn, $sql);

if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}

$sql = "INSERT INTO jewel (Ip,
datecompletion, 
frequency,
newspaper,
newspaper_support,
radio,
radio_support,
television,
television_support,
magazine,
magazine_support,
internet,
internet_support,
cinema,
cinema_support,
videogame,
videogame_support,
wordofmouth,
wordofmouth_support,
property1,
property2,
property3,
expectation1,
expectation2,
expectation3,
comfortable, 
origin,
production, 
ecology,
buyinternet,
reason,
timeacceptable,
elasticity,
personalization,
needs
) VALUES ('$ClientiP',
'$date', 
'{$_POST['intermediatejewelry_frequency']}',
'{$_POST['intermediatejewelry_newspaper']}',
'{$_POST['intermediatejewelry_newspaper_support']}',
'{$_POST['intermediatejewelry_radio']}',
'{$_POST['intermediatejewelry_radio_support']}',
'{$_POST['intermediatejewelry_television']}',
'{$_POST['intermediatejewelry_television_support']}',
'{$_POST['intermediatejewelry_magazine']}',
'{$_POST['intermediatejewelry_magazine_support']}',
'{$_POST['intermediatejewelry_internet']}',
'{$_POST['intermediatejewelry_internet_support']}',
'{$_POST['intermediatejewelry_cinema']}',
'{$_POST['intermediatejewelry_cinema_support']}',
'{$_POST['intermediatejewelry_videogame']}',
'{$_POST['intermediatejewelry_videogame_support']}',
'{$_POST['intermediatejewelry_wordofmouth']}',
'{$_POST['intermediatejewelry_wordofmouth_support']}',
'{$_POST['intermediatejewelry_property1']}',
'{$_POST['intermediatejewelry_property2']}',
'{$_POST['intermediatejewelry_property3']}',
'{$_POST['intermediatejewelry_expectation1']}',
'{$_POST['intermediatejewelry_expectation2']}',
'{$_POST['intermediatejewelry_expectation3']}',
'{$_POST['intermediatejewelry_checkbox_luxurious']}',
'{$_POST['intermediatejewelry_checkbox_origin']}',
'{$_POST['intermediatejewelry_checkbox_production']}',
'{$_POST['intermediatejewelry_checkbox_ecology']}',
'{$_POST['intermediatejewelry_buyinternet']}',
'{$_POST['intermediatejewelry_notbuyinternet_reason']}',
'{$_POST['intermediatejewelry_delivery_timeacceptable']}',
'{$_POST['intermediatejewelry_checkbox_elasticity']}',
'{$_POST['intermediatejewelry_checkbox_personalization']}',
'{$_POST['intermediatejewelry_checkbox_needs']}'
)";

$query = mysqli_query($conn, $sql);
if (!$query){  
    exit("<pre>".print_r(mysqli_error($query), true));
}
else
{
        echo "<p>Results of the jewel part added successfully to the database.</p>";
}

mysqli_close($conn);

echo "<p>Connection closed.</p>";

?>