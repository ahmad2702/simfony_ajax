<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.owxV3CI' shared service.

return $this->privates['service_locator.owxV3CI'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('doctrine' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'manager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php'));
}));
