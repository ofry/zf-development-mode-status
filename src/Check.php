<?php
    /**
     * Created by PhpStorm.
     * User: ofryak
     * Date: 17.08.18
     * Time: 19:33
     */

    namespace Zend\DevelopmentMode;

    class Check
    {
        const DEVEL_CONFIG = 'config/development.config.php';

        public function __invoke()
        {
            return static::check();
        }

        public static function check()
        {
            return file_exists(self::DEVEL_CONFIG);
        }
    }