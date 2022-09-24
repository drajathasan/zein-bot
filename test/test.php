<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2022-09-24 08:00:29
 * @modify date 2022-09-24 09:59:42
 * @license GPLv3
 * @desc [description]
 */

use Zein\Bot\Providers\Whacenter;

require __DIR__ . '/../vendor/autoload.php';

$chatStatus = Whacenter::send(Whacenter::buildPayload(['message' => ':P 😎', 'number' => '<WA-Number>']))->toArray();