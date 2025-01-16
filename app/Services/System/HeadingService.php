<?php
namespace App\Services\System;
use App\Services\Service;
use App\Model\Heading;

class HeadingService extends Service
{
    public function __construct(Heading $heading)
    {
        parent::__construct($heading);
    }
}