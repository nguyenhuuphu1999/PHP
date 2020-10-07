<?php
    class person{
        protected $Ho_Ten ="Nguyen Huu Phu";
        protected $SDT="0369202024";

    }

    class student extends person{
        function get_name(){
            return $this ->Ho_Ten;
        }
    }
    $sinh_vien = new student;
 echo   $sinh_vien->get_name();
?>