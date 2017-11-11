<?php

namespace mtgsdk;

/**
 * @property-read $id
 * @property-read $version
 * @property-read $details
 * @property-read $releaseDate
 */
class Changelog implements \JsonSerializable
{
    use DataBag, QueriesAll;

    const RESOURCE = 'changelogs';
}
