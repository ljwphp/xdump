<?php
namespace xdump;
class Xdump {
    public static function gdump(){

        echo '<pre>';
        $params = func_get_args();
        foreach($params as $key=>$val){
            var_dump($val);
        }
    }
}