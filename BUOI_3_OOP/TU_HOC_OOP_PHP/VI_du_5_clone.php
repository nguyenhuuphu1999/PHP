<?php
    class Animal{
        protected $name;

        function setname($a){
            $this->name = $a;
        }
        function getname(){
            return $this ->name;
        }
    }

    $dong_vat =new Animal;
    $dong_vat->setname("con cho con");
    echo $dong_vat->getname();
?>