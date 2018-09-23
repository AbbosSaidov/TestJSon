<?php
class DbOperation
{//kjhkjhkjl;;lk;;lk;l
    private $con;
    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    function registerUser($data)
    {

        for($i=0;$i<30;$i++){
            //read
            $string = file_get_contents("../includes/test.json");
            $json_a = json_decode($string, true);
            $json_a["name"]="Bosqa".$i;


            //write
            $fp = fopen('../includes/test.json', 'w');
            fwrite($fp, json_encode($json_a));
            fclose($fp);

        }



        return $json_a["name"];
    }

}