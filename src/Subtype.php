<?php

namespace mtgsdk;

class Subtype implements \JsonSerializable
{
    use DataBag, QueriesAllAsArray;

    const RESOURCE = 'subtypes';
}
