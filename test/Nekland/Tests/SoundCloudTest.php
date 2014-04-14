<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests;


use Nekland\SoundCloudApi\SoundCloud;

class SoundCloudTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldNotHaveToPassHttpClientToConstructor()
    {
        $api = new SoundCloud();
        $this->assertInstanceOf('Nekland\\SoundCloudApi\\Http\\HttpClient', $api->getClient());
    }

    /**
     * @test
     */
    public function shouldAllowToPassHttpClientToConstructor()
    {
        $api = new SoundCloud($this->getMock('Nekland\\BaseApi\\Http\\ClientInterface'));
        $this->assertInstanceOf('Nekland\\BaseApi\\Http\\ClientInterface', $api->getClient());
    }

    /**
     * @test
     */
    public function shouldReturnTrackApi()
    {
        $soundcloud = new SoundCloud();
        $api        = $soundcloud->api('tracks');

        $this->assertInstanceOf('Nekland\\SoundCloudApi\\Api\\Tracks', $api);
    }
}
