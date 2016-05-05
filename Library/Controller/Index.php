<?php
/**
 * KK-Framework
 * Author: kookxiang <r18@ikk.me>
 */

namespace Controller;

use Core\Error;
use Core\Template;

class Index
{
    function index()
    {
        throw new Error('Welcome', 405);
    }

    /**
     * This method can be call by /index/test.json
     * @JSON
     */
    function test()
    {
        return array(
            'hello' => 1,
            'world' => 2
        );
    }
}
