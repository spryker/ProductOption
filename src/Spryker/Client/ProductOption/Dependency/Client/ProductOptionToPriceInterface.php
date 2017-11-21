<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */
namespace Spryker\Client\ProductOption\Dependency\Client;

interface ProductOptionToPriceInterface
{
    /**
     * @return string
     */
    public function getCurrentPriceMode();
}