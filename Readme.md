Soundcloud API
==============

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Nekland/SoundCloudApi/badges/quality-score.png?s=efc016250b9c44ff0e710c63c3c2cd2bef4582ca)](https://scrutinizer-ci.com/g/Nekland/SoundCloudApi/)

Hello guys. I was searching for a cute api wrapper for soundcloud. I didn't find any so I create mine :) .

*Note: this project is not complete at all. But is easy to complete! Do not hesitate to PR or Clone ;-) . Just remember the MIT license.*

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