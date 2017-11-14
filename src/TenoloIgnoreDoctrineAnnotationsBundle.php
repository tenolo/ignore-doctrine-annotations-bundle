<?php

namespace Tenolo\Bundle\IgnoreDoctrineAnnotationsBundle;

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class TenoloIgnoreDoctrineAnnotationsBundle
 *
 * @package Tenolo\Bundle\IgnoreDoctrineAnnotationsBundle
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class TenoloIgnoreDoctrineAnnotationsBundle extends Bundle
{

    /**
     * @inheritDoc
     */
    public function boot()
    {
        parent::boot();

        AnnotationReader::addGlobalIgnoredName('company');
        AnnotationReader::addGlobalIgnoredName('date');
        AnnotationReader::addGlobalIgnoredName('license');
    }

}
