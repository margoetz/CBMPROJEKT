<?php declare(strict_types=1);


/**
 * Establishes and returns a persistent connection to the MySQL database.
 *
 * This function creates a new mysqli instance if one does not already exist,
 * using the database connection details defined in the DB configuration array.
 *
 * @return mysqli The active MySQLi database connection instance.
 */
function connect(): mysqli
{
    static $mysqli;

    if (!$mysqli) {
        $mysqli = new mysqli(DB['host'], DB['user'], DB['pass'], DB['name'], DB['port']);
    }

    return $mysqli;
}


function query($query): mysqli_result
{
    $mysqli = connect();

    return $mysqli->query($query);
}

function disconnect($mysqli): void
{
    $mysqli->close();
}
