<?php
namespace xdump;
class Xdump {
    public static function gdump(){

        echo '<pre>';
        $params = func_get_args();
        var_dump(implode(',',$params));
    }
}