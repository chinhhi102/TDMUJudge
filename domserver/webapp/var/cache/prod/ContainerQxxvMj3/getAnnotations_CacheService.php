<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotations.cache' shared service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/cache/Traits/ProxyTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/cache/Traits/PhpArrayTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->load('getCache_AnnotationsService.php'))));
