<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'movie.search_filter' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/SearchFilter.php';

return $this->privates['movie.search_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL, ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()), array('id' => 'exact', 'title' => 'partial', 'description' => 'partial', 'category' => 'exact'));