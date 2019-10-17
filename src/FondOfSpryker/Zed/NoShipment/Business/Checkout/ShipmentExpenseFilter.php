<?php

namespace FondOfSpryker\Zed\NoShipment\Business\Checkout;

use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Shared\Shipment\ShipmentConstants;

class ShipmentExpenseFilter implements ShipmentExpenseFilterInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer $checkoutResponseTransfer
     * 
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function filterZeroCostShipmentExpensesFromOrder(
        QuoteTransfer $quoteTransfer,
        CheckoutResponseTransfer $checkoutResponseTransfer
    ): QuoteTransfer {
        foreach ($quoteTransfer->getExpenses() as $index => $expenseTransfer) {
            if ($expenseTransfer->getType() !== ShipmentConstants::SHIPMENT_EXPENSE_TYPE) {
                continue;
            }

            if ($expenseTransfer->getSumPrice() == 0) {
                unset($quoteTransfer->getExpenses()[$index]);
            }
        }

        return $quoteTransfer;
    }
}
