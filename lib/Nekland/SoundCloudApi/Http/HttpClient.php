<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\SoundCloudApi\Http;

use Nekland\BaseApi\Http\HttpClient as BaseHttpClient;

class HttpClient extends BaseHttpClient
{

    public function __construct(array $options = [])
    {
        $options = array_merge([
            'base_url'   => 'http://api.soundcloud.com/',
            'user_agent' => 'php-soundcloud-api (https://github.com/Nekland/SoundCloudApi)'
        ], $options);

        parent::__construct($options);
        $this->getAuthFactory()->addNamespace('Nekland\\SoundCloudApi\\Http\\Auth');
    }
}
