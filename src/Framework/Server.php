<?php

namespace Rainbows\Framework;

class Server
{
    public function __construct(){

    }


    public static function test($path){

        $runtime = rtrim($path, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.'runtime';

        if(!is_dir($runtime))
            mkdir($runtime, 0755, true);

        file_put_contents($runtime.'/1.log', __METHOD__);

        var_dump( __METHOD__);
    }
}