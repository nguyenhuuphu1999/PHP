<?php
    class cabulary{
        public $soA,$soB;

        function __construct($soA,$soB)
        {
            $this->soA = $soA;
            $this->soB =$soB;
           
        }

        function cong()
        {
           
          return  $this ->soA + $this->soB; 
        }

        function tru()
        {
            return $this ->soA-$this->soB;

        }

        function nhan()
        {
            return $this->soA * $this->soB;
        }
        function chia()
        {
            return $this->soA / $this->soB;
        }
    }
?>