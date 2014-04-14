<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\SoundCloudApi;

use Nekland\BaseApi\Http\ClientInterface;
use Nekland\SoundCloudApi\Http\HttpClient;

class SoundCloud extends \Nekland\BaseApi\Api
{
    public function __construct(ClientInterface $httpClient = null)
    {
        if ($httpClient === null){
            parent::__construct(new HttpClient());
        } else {
            parent::__construct($httpClient);
        }
    }

    public function api($name)
    {
        switch($name) {
            case 'tracks':
                return new Api\Tracks($this);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }
    }

}
