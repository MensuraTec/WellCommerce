<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\SalesBundle\Tests\DataGrid;

use WellCommerce\AppBundle\Test\DataGrid\AbstractDataGridTestCase;

/**
 * Class OrderDataGridTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class OrderDataGridTest extends AbstractDataGridTestCase
{
    protected function getDataGrid()
    {
        return $this->container->get('order.datagrid')->getInstance();
    }

    protected function getColumns()
    {
        return [
            'id',
            'client',
            'productTotal',
            'shippingTotal',
            'orderTotal',
            'currency',
            'currentStatus',
            'createdAt',
        ];
    }
}