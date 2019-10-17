<?php

namespace FondOfSpryker\Zed\NoShipment\Business;

use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\NoShipment\Business\NoShipmentBusinessFactory getFactory()
 */
class NoShipmentFacade extends AbstractFacade implements NoShipmentFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer $checkoutResponseTransfer
     * 
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function filterZeroCostShipmentExpensesFromOrder(QuoteTransfer $quoteTransfer, CheckoutResponseTransfer $checkoutResponseTransfer): QuoteTransfer
    {
        return $this->getFactory()
            ->createShipmentExpenseFilter()
            ->filterZeroCostShipmentExpensesFromOrder($quoteTransfer, $checkoutResponseTransfer);
    }
}
