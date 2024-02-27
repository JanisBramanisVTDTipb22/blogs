<?php

class database {
    
    private $pdo;

    public function __construct($config)
    {
        
        //dd(http_build_query($config, "", ";"));
        $connection_string = "mysql:" . http_build_query($config, "", ";");
        //$connection_string = "mysql:host=$config[host];dbname=$config[dbname];user=$config[user];password=$config[password];charset=$config[charset]";
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    //saglabāt sql izpildei
    public function execute($query_string){

        $query = $this->pdo->prepare($query_string);
    
    //izpildīt sql
    $query->execute();
    //atgriez rezultātus
    return $query;  
    }
}