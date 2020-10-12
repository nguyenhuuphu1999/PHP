<?php
    class person{
        public $notice="Noi dung chua ghi de";

        function getMessage(){
            echo $this->notice;
        }
    }

    class student extends person{
        public $notice = "Noi dung da bi ghi de";
       
        public function getMessage()
        {
            parent ::getMessage();
            
            echo $this->notice;
        }
    }
    $sinh_vien= new student;
    echo $sinh_vien->getMessage();
   
?>