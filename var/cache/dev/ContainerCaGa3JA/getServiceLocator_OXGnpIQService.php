<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.OXGnpIQ' shared service.

return $this->privates['service_locator.OXGnpIQ'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('doctrine' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php'));
}));