<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2022-09-24 09:43:02
 * @modify date 2022-09-24 09:57:50
 * @license GPLv3
 * @desc [description]
 */

namespace Zein\Bot\Providers;

abstract class Contract
{
    /**
     * Every provider must be provide send method
     *
     * @param array $data
     * @return void
     */
    abstract public static function send(array $data);

    /**
     * By default all transaction is running with HTTP
     * payload must be provide
     *
     * @param array $additionalData
     * @return void
     */
    abstract public static function buildPayload(array $additionalData);
}