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

namespace WellCommerce\ClientBundle\Tests\Form\Admin;

use WellCommerce\AppBundle\Test\Form\AbstractFormBuilderTestCase;

/**
 * Class ClientFormBuilderTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ClientFormBuilderTest extends AbstractFormBuilderTestCase
{
    protected function getFormBuilderService()
    {
        return $this->container->get('client.form_builder.admin');
    }

    protected function getFactoryService()
    {
        return $this->container->get('client.factory');
    }
}