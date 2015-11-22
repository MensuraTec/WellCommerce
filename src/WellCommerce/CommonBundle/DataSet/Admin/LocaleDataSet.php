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

namespace WellCommerce\CommonBundle\DataSet\Admin;

use WellCommerce\AppBundle\DataSet\AbstractDataSet;
use WellCommerce\Component\DataSet\Configurator\DataSetConfiguratorInterface;

/**
 * Class LocaleDataSet
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class LocaleDataSet extends AbstractDataSet
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(DataSetConfiguratorInterface $configurator)
    {
        $configurator->setColumns([
            'id'       => 'locale.id',
            'code'     => 'locale.code',
            'currency' => 'default_currency.code',
        ]);

        $this->setDefaultRequestOption('order_by', 'code');
    }
}