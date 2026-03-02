<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\QuoteApprovalShipmentConnector;

use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\QuoteApprovalShipmentConnector\Checker\QuoteShipmentChecker;
use Spryker\Client\QuoteApprovalShipmentConnector\Checker\QuoteShipmentCheckerInterface;
use Spryker\Client\QuoteApprovalShipmentConnector\Dependency\Service\QuoteApprovalShipmentConnectorToShipmentServiceInterface;

class QuoteApprovalShipmentConnectorFactory extends AbstractFactory
{
    public function createQuoteShipmentChecker(): QuoteShipmentCheckerInterface
    {
        return new QuoteShipmentChecker(
            $this->getShipmentService(),
        );
    }

    public function getShipmentService(): QuoteApprovalShipmentConnectorToShipmentServiceInterface
    {
        return $this->getProvidedDependency(QuoteApprovalShipmentConnectorDependencyProvider::SERVICE_SHIPMENT);
    }
}
