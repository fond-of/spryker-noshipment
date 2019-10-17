<?php

namespace FondOfSpryker\Zed\NoShipment\Communication\Plugin\Checkout;

use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\Checkout\Dependency\Plugin\CheckoutPreSaveHookInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 *
 * @method \FondOfSpryker\Zed\NoShipment\Business\NoShipmentFacadeInterface getFacade()
 */
class FilterZeroCostShipmentExpensesPlugin extends AbstractPlugin implements CheckoutPreSaveHookInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer $checkoutResponseTransfer
     * 
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function preSave(QuoteTransfer $quoteTransfer, CheckoutResponseTransfer $checkoutResponseTransfer): QuoteTransfer
    {
        return $this->getFacade()->filterZeroCostShipmentExpensesFromOrder($quoteTransfer, $checkoutResponseTransfer);
    }
}
