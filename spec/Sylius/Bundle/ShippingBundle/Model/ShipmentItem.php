<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\ShippingBundle\Model;

use PHPSpec2\ObjectBehavior;
use Sylius\Bundle\ShippingBundle\Model\ShipmentItemInterface;

/**
 * Shipment item model spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class ShipmentItem extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\ShippingBundle\Model\ShipmentItem');
    }

    function it_should_implement_Sylius_shipment_item_interface()
    {
        $this->shouldImplement('Sylius\Bundle\ShippingBundle\Model\ShipmentItemInterface');
    }

    function it_should_not_have_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_should_not_belong_to_shipment_by_default()
    {
        $this->getShipment()->shouldReturn(null);
    }

    /**
     * @param Sylius\Bundle\ShippingBundle\Model\ShipmentInterface $shipment
     */
    function it_should_allow_assigning_itself_to_shipment($shipment)
    {
        $this->setShipment($shipment);
        $this->getShipment()->shouldReturn($shipment);
    }

    /**
     * @param Sylius\Bundle\ShippingBundle\Model\ShipmentInterface $shipment
     */
    function it_should_allow_detaching_itself_from_shipment($shipment)
    {
        $this->setShipment($shipment);
        $this->getShipment()->shouldReturn($shipment);

        $this->setShipment(null);
        $this->getShipment()->shouldReturn(null);
    }

    function it_should_not_have_shippable_defined_by_default()
    {
        $this->getShippable()->shouldReturn(null);
    }

    /**
     * @param Sylius\Bundle\ShippingBundle\Model\ShippableInterface $shippable
     */
    function it_should_allow_defining_shippable($shippable)
    {
        $this->setShippable($shippable);
        $this->getShippable()->shouldReturn($shippable);
    }

    function it_should_have_ready_state_by_default()
    {
        $this->getShippingState()->shouldReturn(ShipmentItemInterface::STATE_READY);
    }

    function its_state_should_be_mutable()
    {
        $this->setShippingState(ShipmentItemInterface::STATE_PENDING);
        $this->getShippingState()->shouldReturn(ShipmentItemInterface::STATE_PENDING);
    }

    function it_should_initialize_creation_date_by_default()
    {
        $this->getCreatedAt()->shouldHaveType('DateTime');
    }

    function it_should_not_have_last_update_date_by_default()
    {
        $this->getUpdatedAt()->shouldReturn(null);
    }
}
