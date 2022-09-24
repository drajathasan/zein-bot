<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2022-09-24 08:01:41
 * @modify date 2022-09-24 09:05:55
 * @license GPLv3
 * @desc [description]
 */

function botConfig(string $configName)
{
    if (function_exists('config'))
    {
        return config($configName);
    }
    // test
    else if (file_exists($configPath = __DIR__ . '/../../test/config.php'))
    {
        $config = include $configPath;

        return $config[$configName]??null;
    }
}