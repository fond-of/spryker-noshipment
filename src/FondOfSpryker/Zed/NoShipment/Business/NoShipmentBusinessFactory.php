<?php

namespace FondOfSpryker\Zed\NoShipment\Business;

use FondOfSpryker\Zed\NoShipment\Business\Checkout\ShipmentExpenseFilter;
use FondOfSpryker\Zed\NoShipment\Business\Checkout\ShipmentExpenseFilterInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;


class NoShipmentBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\NoShipment\Business\Checkout\ShipmentExpenseFilterInterface
     */
    public function createShipmentExpenseFilter(): ShipmentExpenseFilterInterface
    {
        return new ShipmentExpenseFilter();
    }

}
