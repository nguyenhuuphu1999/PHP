<?php
    include_once('SQL.php');
   

 class database_sach extends database{
    function get()
    {
        $sql="SELECT * FROM bs_sach ";
        $this->database();
        $this->getsql($sql);
        $this->execute();
    
    }

    function fetchALL()
    {
        return $this->fetchAll();
    }

 }
    
?>