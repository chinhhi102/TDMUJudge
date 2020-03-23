<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Team\MiscController' shared autowired service.

include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/BaseController.php';
include_once $this->targetDirs[3].'/src/Controller/Team/MiscController.php';

$this->services['App\\Controller\\Team\\MiscController'] = $instance = new \App\Controller\Team\MiscController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\ScoreboardService'] ?? $this->getScoreboardServiceService()), ($this->privates['App\\Service\\SubmissionService'] ?? $this->getSubmissionServiceService()));

$instance->setContainer(($this->privates['.service_locator.njmUWMD'] ?? $this->load('get_ServiceLocator_NjmUWMDService.php'))->withContext('App\\Controller\\Team\\MiscController', $this));

return $instance;