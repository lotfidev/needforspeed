<?php

namespace Entreprise\EntrepriseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EntrepriseBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
