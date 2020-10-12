<?php
    class phuong_thuc{
        static $NAME = 'NGUYEN HUU PHU' ;

        function phuongthuc()
        {
            return self::$NAME;
        }

    }
    echo phuong_thuc:: phuongthuc();
?>