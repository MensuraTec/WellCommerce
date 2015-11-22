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

namespace WellCommerce\ClientBundle\Controller\Front;

use WellCommerce\AppBundle\Controller\Front\AbstractFrontController;
use WellCommerce\AppBundle\Controller\Front\FrontControllerInterface;

/**
 * Class ClientOrderController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ClientOrderController extends AbstractFrontController implements FrontControllerInterface
{
    public function indexAction()
    {
        return $this->displayTemplate('index');
    }

    public function viewAction()
    {
        return $this->displayTemplate('view');
    }
}