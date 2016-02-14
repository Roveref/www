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

function getDateYMDHIS()
    {
    $date = date('Y-m-d H:i:s');
    return $date;
    }

function getNumberColumn($database, $table, $connection)
    {
    $sql = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = '$database' AND table_name = '$table'";

    // $sql = "SELECT * FROM $table";

    echo "<p>" . $sql . "</p>";
    $query = mysqli_query($connection, $sql);
    $assoc = mysqli_fetch_assoc($query);
    $numberColumns = $assoc['COUNT(*)'];
    return $numberColumns;
    }

function connectDatabase($host, $user, $password, $database)
    {
    echo "<p>Trying to access the database...</p>";
    $connectDatabase = mysqli_connect($host, $user, $password, $database);
    if (!$connectDatabase) die("<pre>" . print_r(mysqli_connect_error() , true));
    echo "<p>Connection established.</p>";
    return $connectDatabase;
    }

function disconnectDatabase($connection)
    {
    mysqli_close($connection);
    echo "<p>Connection closed.</p>";
    }

function registerInTable($table, $data, $date, $clientIP, $numberColumnsGI, $connection)
    {
    array_unshift($data, $date);
    array_unshift($data, $clientIP);
    $sql = "INSERT INTO $table VALUES (";
    $last_key = end(array_keys($data));
    foreach($data as $key => $element)
        {
        if ($key <= $numberColumnsGI - 2)
            {
            if ($key != $last_key AND $key != $numberColumnsGI - 2)
                {
                $sql = $sql . "'" . $element . "',";
                }
              else
                {
                $sql = $sql . "'" . $element . "',NULL)";
                }
            }
        }

    echo '<p>' . $sql . '</p>';
    $query = mysqli_query($connection, $sql);
    if (!$query)
        {
        exit("<pre>" . print_r(mysqli_error($query) , true));
        }
      else
        {
        echo "<p>Results of the general part added successfully to the database.</p>";
        }
    }

    function registerInTable2($table, $data, $date, $clientIP, $numberColumnsGI, $connection)
    {
    array_unshift($data, $date);
    array_unshift($data, $clientIP);
    $sql = "INSERT INTO $table (";
    $last_key = end(array_keys($data));
    foreach($data as $key => $element)
        {
            $lengthTable = strlen($table);
            $lengthKey = strlen($key);
            $newKey = substr($key, $lengthKey-$lengthTable,$lengthKey);
                echo '<p>' . $newKey . '</p>';

            if($key != $lastkey)
                {
                $sql = $sql . "" . $newKey . "',";
                }
              else
                {
                $sql = $sql . "" . $newKey . ")";
                }
            }
        }

    echo '<p>' . $sql . '</p>';
    $query = mysqli_query($connection, $sql);
    if (!$query)
        {
        exit("<pre>" . print_r(mysqli_error($query) , true));
        }
      else
        {
        echo "<p>Results of the general part added successfully to the database.</p>";
        }
    }

function phpInHTML($field, $product)
    {
        echo "$product_$field";
    }

?>
