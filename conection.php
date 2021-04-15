<?php

class Connection
{

    function connect()
    {
        $dbh = new PDO('mysql:host=localhost;dbname=energypeople;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));
        return $dbh;
    }


    
}
