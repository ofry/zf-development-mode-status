<?php
    /**
     * Created by PhpStorm.
     * User: ofryak
     * Date: 17.08.18
     * Time: 20:29
     */

    namespace Zend\DevelopmentMode;

    if (!function_exists('Zend\DevelopmentMode\check')) {

        function check()
        {
            return Check::check();
        }
    }