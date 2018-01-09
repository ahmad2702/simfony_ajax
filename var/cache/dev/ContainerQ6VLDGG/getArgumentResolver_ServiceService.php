<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\DefaultController:index' => function () {
    return ($this->privates['service_locator.OXGnpIQ'] ?? $this->load(__DIR__.'/getServiceLocator_OXGnpIQService.php'));
}, 'App\\Controller\\EditController:add' => function () {
    return ($this->privates['service_locator.owxV3CI'] ?? $this->load(__DIR__.'/getServiceLocator_OwxV3CIService.php'));
}, 'App\\Controller\\EditController:remove' => function () {
    return ($this->privates['service_locator.owxV3CI'] ?? $this->load(__DIR__.'/getServiceLocator_OwxV3CIService.php'));
}, 'App\\Controller\\ProfileController:profile' => function () {
    return ($this->privates['service_locator.RDnvng_'] ?? $this->load(__DIR__.'/getServiceLocator_RDnvngService.php'));
}, 'App\\Controller\\SearchController:searchGet' => function () {
    return ($this->privates['service_locator.i4JlS42'] ?? $this->load(__DIR__.'/getServiceLocator_I4JlS42Service.php'));
}, 'App\\Controller\\SearchController:searchStart' => function () {
    return ($this->privates['service_locator.rkxwIHu'] ?? $this->load(__DIR__.'/getServiceLocator_RkxwIHuService.php'));
}, 'App\\Controller\\SecurityController:loginAction' => function () {
    return ($this->privates['service_locator.zp3v.Fu'] ?? $this->load(__DIR__.'/getServiceLocator_Zp3v_FuService.php'));
}, 'App\\Controller\\DefaultController::index' => function () {
    return ($this->privates['service_locator.OXGnpIQ'] ?? $this->load(__DIR__.'/getServiceLocator_OXGnpIQService.php'));
}, 'App\\Controller\\EditController::add' => function () {
    return ($this->privates['service_locator.owxV3CI'] ?? $this->load(__DIR__.'/getServiceLocator_OwxV3CIService.php'));
}, 'App\\Controller\\EditController::remove' => function () {
    return ($this->privates['service_locator.owxV3CI'] ?? $this->load(__DIR__.'/getServiceLocator_OwxV3CIService.php'));
}, 'App\\Controller\\ProfileController::profile' => function () {
    return ($this->privates['service_locator.RDnvng_'] ?? $this->load(__DIR__.'/getServiceLocator_RDnvngService.php'));
}, 'App\\Controller\\SearchController::searchGet' => function () {
    return ($this->privates['service_locator.i4JlS42'] ?? $this->load(__DIR__.'/getServiceLocator_I4JlS42Service.php'));
}, 'App\\Controller\\SearchController::searchStart' => function () {
    return ($this->privates['service_locator.rkxwIHu'] ?? $this->load(__DIR__.'/getServiceLocator_RkxwIHuService.php'));
}, 'App\\Controller\\SecurityController::loginAction' => function () {
    return ($this->privates['service_locator.zp3v.Fu'] ?? $this->load(__DIR__.'/getServiceLocator_Zp3v_FuService.php'));
})));
