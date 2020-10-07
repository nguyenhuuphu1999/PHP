<?php
    class  student{
      public  $Ho_va_Ten="Nguyen Huu Phu";
      private  $SDT="0369202024";

     public function get_inf(){
          return $this ->SDT." at ".$this->get_time();
      }

      protected function get_time(){
          return date('y:m:d');
      }

    }
    $sinhvien = new student;
   echo $sinhvien->get_inf();

//    echo $sinhvien->get_time();
    // echo $sinhvien->SDT;
  
?>