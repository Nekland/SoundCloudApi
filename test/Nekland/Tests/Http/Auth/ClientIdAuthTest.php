<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Http\Auth;

use Guzzle\Http\Message\Request;
use Nekland\SoundCloudApi\Http\Auth\ClientIdAuth;

class ClientIdAuthTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldAddClientIdToRequest()
    {
        $id      = uniqid();
        $auth    = new ClientIdAuth();
        $request = new Request('POST', 'http://fake.com');

        $auth->setOptions(['client_id' => $id]);
        $auth->auth($request);

        $this->assertEquals($request->getQuery()->get('client_id'), $id);
    }
}
