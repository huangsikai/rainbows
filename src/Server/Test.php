<?php

namespace Rainbows\Framework\Server;

class Test
{
    public static function test($dir){

        $runtime = rtrim($dir, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.'runtime';

        if(!is_dir($runtime))
            mkdir($runtime, 0777, true);


        file_put_contents($runtime.'/1.log', __METHOD__);

        var_dump(__METHOD__);

    }
}