<?php

namespace Tenancy\Misc\Help\Data\Packages\Affects;

use Tenancy\Misc\Help\Data\Packages\AffectsPackage;

class Filesystems extends AffectsPackage {
    protected $events = [
        'Events\\ConfigureDisk'
    ];
}
