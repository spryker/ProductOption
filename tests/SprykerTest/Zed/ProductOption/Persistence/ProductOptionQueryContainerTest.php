<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\ProductOption\Persistence;

use Codeception\Test\Unit;
use Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroupQuery;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionGroupQuery;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionValueQuery;
use Spryker\Zed\ProductOption\Persistence\ProductOptionPersistenceFactory;
use Spryker\Zed\ProductOption\Persistence\ProductOptionQueryContainer;

/**
 * Auto-generated group annotations
 * @group SprykerTest
 * @group Zed
 * @group ProductOption
 * @group Persistence
 * @group QueryContainer
 * @group ProductOptionQueryContainerTest
 * Add your own group annotations below this line
 */
class ProductOptionQueryContainerTest extends Unit
{

    /**
     * @return void
     */
    public function testQueryAllProductAbstractProductOptionGroupsReturnsCorrectQuery()
    {
        $productOptionQueryContainer = new ProductOptionQueryContainer();
        $productOptionQueryContainer->setFactory(new ProductOptionPersistenceFactory());
        $query = $productOptionQueryContainer->queryAllProductAbstractProductOptionGroups();

        $this->assertInstanceOf(SpyProductAbstractProductOptionGroupQuery::class, $query);
    }

    /**
     * @return void
     */
    public function testQueryAllProductOptionGroupsReturnsCorrectQuery()
    {
        $productOptionQueryContainer = new ProductOptionQueryContainer();
        $productOptionQueryContainer->setFactory(new ProductOptionPersistenceFactory());
        $query = $productOptionQueryContainer->queryAllProductOptionGroups();

        $this->assertInstanceOf(SpyProductOptionGroupQuery::class, $query);
    }

    /**
     * @return void
     */
    public function testQueryAllProductOptionValuesReturnsCorrectQuery()
    {
        $productOptionQueryContainer = new ProductOptionQueryContainer();
        $productOptionQueryContainer->setFactory(new ProductOptionPersistenceFactory());
        $query = $productOptionQueryContainer->queryAllProductOptionValues();

        $this->assertInstanceOf(SpyProductOptionValueQuery::class, $query);
    }
}
