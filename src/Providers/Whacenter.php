<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2022-09-24 07:35:52
 * @modify date 2022-09-24 09:44:27
 * @license GPLv3
 * @desc [description]
 */

namespace Zein\Bot\Providers;

use Zein\Http\Client;

class Whacenter extends Contract
{
    public static function send($data)
    {
        return Client::post('https://app.whacenter.com/api/send', [
            'form_params' => $data
        ]);
    }

    public static function buildPayload(array $additionalData = [])
    {
        $whacenterConfig = botConfig('whacenter')??[];
        return array_merge($whacenterConfig, $additionalData);
    }
}