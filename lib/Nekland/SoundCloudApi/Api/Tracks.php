<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\SoundCloudApi\Api;


class Tracks extends \Nekland\BaseApi\Api\AbstractApi
{
    /**
     * Data returned for /track
     * @see http://developers.soundcloud.com/docs/api/reference#tracks
     *
     * @param string $link
     * @return array
     */
    public function getTrackFromLink($link)
    {
        return $this->get('resolve.json', ['url' => $link]);
    }
}
