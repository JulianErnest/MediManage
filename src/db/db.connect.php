<?php

class DbConnect {

    protected function connect() {
        try
        {
            $username = "root";
            $password = "";
            $dsn = 'mysql:dbname=ooplogin;host=localhost';
            $dbh = new PDO($dsn, $username, $password);
            return $dbh;
        }
        catch (PDOException  $e)
        {
            print "ERROR!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}