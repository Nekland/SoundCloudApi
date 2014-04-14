Soundcloud API
==============

Hello guys. I was searching for a cute api wrapper for soundcloud. I didn't find any so I create mine :) .

Installation
------------

You should use composer to install it, and it's sooooo easy to install:

```bash
composer require 'nekland/soundcloud-api'
```

Usage
-----

It's also so easy to use:

```php
$soundcloud = new SoundCloud();

/** @var \Nekland\SoundCloudApi\Api\Tracks $tracksApi */
$tracksApi = $soundcloud->api('tracks');

$dataForTrack = $trackApi->getTrackFromLink('https://soundcloud.com/serious-url/lemaitre-high-tide');
```

You can check the `Api` namespace to learn more.