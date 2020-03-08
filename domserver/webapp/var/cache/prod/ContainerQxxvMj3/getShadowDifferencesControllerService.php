<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\ShadowDifferencesController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/BaseController.php';
include_once $this->targetDirs[3].'/src/Controller/Jury/ShadowDifferencesController.php';

$this->services['App\\Controller\\Jury\\ShadowDifferencesController'] = $instance = new \App\Controller\Jury\ShadowDifferencesController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->privates['App\\Service\\SubmissionService'] ?? $this->getSubmissionServiceService()), ($this->services['session'] ?? $this->load('getSessionService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

$instance->setContainer(($this->privates['.service_locator.njmUWMD'] ?? $this->load('get_ServiceLocator_NjmUWMDService.php'))->withContext('App\\Controller\\Jury\\ShadowDifferencesController', $this));

return $instance;
