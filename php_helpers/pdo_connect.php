<?php
// NOTE TO TA: This was taken as a helper method from http://jayblanchard.net/proper_password_hashing_with_PHP.html

/*
 * name:        PDO Connect & Query
 * author:      Jay Blanchard
 * date:        April 2015
 */


error_reporting(E_ALL);
ini_set('display_errors', 1);

define('USER', 'root');
define('PASS', '');


function dataQuery($query, $params) {
    // what kind of query is this?
    $queryType = explode(' ', $query);

    // establish database connection
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=mydb', USER, PASS);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        $errorCode = $e->getCode();
    }

    // run query
    try {
        $queryResults = $dbh->prepare($query);
        $queryResults->execute($params);
        if($queryResults != null && 'SELECT' == $queryType[0]) {
            $results = $queryResults->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } else {
            return $queryResults->rowCount();
        }
        $queryResults = null; // first of the two steps to properly close
        $dbh = null; // second step tp close the connection
    }
    catch(PDOException $e) {
        $errorMsg = $e->getMessage();
        echo $errorMsg;
    }
}

?>