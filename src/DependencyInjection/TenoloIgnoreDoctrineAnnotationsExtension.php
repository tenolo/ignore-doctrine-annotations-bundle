<?php

namespace Tenolo\Bundle\IgnoreDoctrineAnnotationsBundle\DependencyInjection;

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class TenoloIgnoreDoctrineAnnotationsExtension
 *
 * @package Tenolo\Bundle\IgnoreDoctrineAnnotationsBundle\DependencyInjection
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class TenoloIgnoreDoctrineAnnotationsExtension extends ConfigurableExtension
{

    /**
     * @inheritdoc
     */
    public function loadInternal(array $config, ContainerBuilder $container)
    {
        $this->ignoreAnnotations($config);
    }

    /**
     * @param $config
     */
    protected function ignoreAnnotations($config)
    {
        $ignores = ['company', 'date', 'license'];

        if (isset($config['doctrine']['ignore_annotations'])) {
            $ignores = array_replace($ignores, $config['doctrine']['ignore_annotations']);
        }

        foreach ($ignores as $ignore) {
            $ignore = trim($ignore);

            if (!empty($ignore)) {
                AnnotationReader::addGlobalIgnoredName($ignore);
            }
        }
    }

}
