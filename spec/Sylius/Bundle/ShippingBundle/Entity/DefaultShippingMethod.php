<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\ShippingBundle\Entity;

use PHPSpec2\ObjectBehavior;

/**
 * Default shipping method entity spec.
 *
 * @author Pawęł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class DefaultShippingMethod extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\ShippingBundle\Entity\DefaultShippingMethod');
    }

    function it_implements_Sylius_shipping_method_interface()
    {
        $this->shouldImplement('Sylius\Bundle\ShippingBundle\Model\ShippingMethodInterface');
    }

    function it_extends_Sylius_shipping_method_mapped_superclass()
    {
        $this->shouldHaveType('Sylius\Bundle\ShippingBundle\Entity\ShippingMethod');
    }
}
