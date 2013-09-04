<?php

namespace Puphpet\Extension\VagrantfileBundle;

use Puphpet\MainBundle\Extension;

class Configure extends Extension\ExtensionAbstract implements Extension\ExtensionInterface
{
    public function getName()
    {
        return 'Vagrantfile';
    }

    public function getMainController()
    {
        return $this->container->get('puphpet_extension_vagrantfile_main_controller');
    }
}