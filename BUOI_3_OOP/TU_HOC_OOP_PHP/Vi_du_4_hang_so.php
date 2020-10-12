<?php
class database{
    const HOST_NAME='localhost';
    const NAME= 'NGUYEN HUU PHU';
    

    function getNAME(){
        return  self:: NAME;
    }
}
$du_lieu=new database;
echo $du_lieu->getNAME();
// echo database:: HOST_NAME;
?>