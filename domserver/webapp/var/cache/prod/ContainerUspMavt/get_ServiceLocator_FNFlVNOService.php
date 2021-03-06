<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.fNFlVNO' shared service.

return $this->privates['.service_locator.fNFlVNO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'formFactory' => ['services', 'form.factory', 'getForm_FactoryService.php', true],
    'scoreboardService' => ['privates', 'App\\Service\\ScoreboardService', 'getScoreboardServiceService', false],
], [
    'formFactory' => '?',
    'scoreboardService' => 'App\\Service\\ScoreboardService',
]);
