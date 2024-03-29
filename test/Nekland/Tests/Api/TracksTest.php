<?php

/**
 * This file is a part of nekland soundcloud api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Api;

use Nekland\SoundCloudApi\SoundCloud;

class TracksTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnJson()
    {
        $tracks = $this->getMockApi()->api('tracks');
        $data = $tracks->getTrackFromLink('http://fake.com');

        $this->assertEquals($data['id'], 13158665);
    }

    /**
     * @return SoundCloud
     */
    private function getMockApi()
    {
        $httpClient = $this->getMock('Nekland\\BaseApi\\Http\\ClientInterface');

        $httpClient->expects($this->any())
            ->method('get')
            ->willReturn($this->getJson())
        ;
        $api = new SoundCloud($httpClient);

        return $api;
    }

    private function getJson()
    {
        return '{
  "id": 13158665,
  "created_at": "2011/04/06 15:37:43 +0000",
  "user_id": 3699101,
  "duration": 18109,
  "commentable": true,
  "state": "finished",
  "sharing": "public",
  "tag_list": "soundcloud:source=iphone-record",
  "permalink": "munching-at-tiannas-house",
  "description": null,
  "streamable": true,
  "downloadable": true,
  "genre": null,
  "release": null,
  "purchase_url": null,
  "label_id": null,
  "label_name": null,
  "isrc": null,
  "video_url": null,
  "track_type": "recording",
  "key_signature": null,
  "bpm": null,
  "title": "Munching at Tiannas house",
  "release_year": null,
  "release_month": null,
  "release_day": null,
  "original_format": "m4a",
  "original_content_size": 10211857,
  "license": "all-rights-reserved",
  "uri": "http://api.soundcloud.com/tracks/13158665",
  "permalink_url": "http://soundcloud.com/user2835985/munching-at-tiannas-house",
  "artwork_url": null,
  "waveform_url": "http://w1.sndcdn.com/fxguEjG4ax6B_m.png",
  "user": {
    "id": 3699101,
    "permalink": "user2835985",
    "username": "user2835985",
    "uri": "http://api.soundcloud.com/users/3699101",
    "permalink_url": "http://soundcloud.com/user2835985",
    "avatar_url": "http://a1.sndcdn.com/images/default_avatar_large.png?142a848"
  },
  "stream_url": "http://api.soundcloud.com/tracks/13158665/stream",
  "download_url": "http://api.soundcloud.com/tracks/13158665/download",
  "playback_count": 0,
  "download_count": 0,
  "favoritings_count": 0,
  "comment_count": 0,
  "created_with": {
    "id": 124,
    "name": "SoundCloud iPhone",
    "uri": "http://api.soundcloud.com/apps/124",
    "permalink_url": "http://soundcloud.com/apps/iphone"
  },
  "attachments_uri": "http://api.soundcloud.com/tracks/13158665/attachments"
}';
    }
}
