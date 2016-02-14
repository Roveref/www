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
    $sql = "INSERT INTO $table (Ip, datecompletion,";
    if($table == "general_information")
    $last_key = "general_information_mostdelightful";
    if($table == "mechanicalpen")
    $last_key = "mechanicalpen_needs";
    foreach($data as $key => $element)
        {
            if(substr($key, 0, strlen($table))==$table)
                {
            $lengthTable = strlen($table);
            $newKey = substr($key, $lengthTable+1);

            if($key != $last_key)
                {
                $sql = $sql . "" . $newKey . ",";
                }
              else
                {
                $sql = $sql . "" . $newKey . ",id)";
                break 1;
                }
                }
        }
                $sql = $sql . " VALUES " . "('$clientIP','$date',";

        foreach($data as $key => $element)
        {
            if(substr($key, 0, strlen($table))==$table)
                {
            if($key != $last_key)
                {
                $sql = $sql . "'" . $element . "',";
                }
              else
                {
                $sql = $sql . "'" . $element . "',NULL)";
                break 1;
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
        echo "<p>Results of the part $table added successfully to the database.</p>";
        }
    }

function phpInHTML($field, $product)
    {
        echo $product . '_' . $field;
    }

?>
