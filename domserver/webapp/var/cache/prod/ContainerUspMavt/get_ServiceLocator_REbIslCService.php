<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.rEbIslC' shared service.

return $this->privates['.service_locator.rEbIslC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'submissionService' => ['privates', 'App\\Service\\SubmissionService', 'getSubmissionServiceService', false],
], [
    'submissionService' => 'App\\Service\\SubmissionService',
]);