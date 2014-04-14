<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\SoundCloudApi\Http\Auth;


use Nekland\BaseApi\Http\Auth\AuthInterface;

class ClientIdAuth implements AuthInterface
{
    /**
     * @var mixed[]
     */
    private $options;

    /**
     * @param array $options
     * @return self
     */
    public function setOptions(array $options)
    {
        $this->options = array_merge(
            ['client_id' => null],
            $options
        );
    }

    /**
     * @param \Guzzle\Http\Message\Request $request
     */
    public function auth(\Guzzle\Http\Message\Request $request)
    {
        if (!$request->getQuery()->hasKey('client_id')) {
            $request->getQuery()->add('client_id', $this->options['client_id']);
        }
    }
}
