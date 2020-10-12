<?php
    final  class animal{
         public $Tieng_keu='Quy dinh tieng keu';
    }

    class dot extends animal{
        
        function concho(){
            return $Tieng_keu =" gau gau";
        }
    }

    $dong_vat=new dot;
    echo $dong_vat->concho();
?>